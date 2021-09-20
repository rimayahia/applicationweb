<?php
session_start();
 
include('trtm/cnx.php');
 
//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['username'])){
    
    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['pass']) ? trim($_POST['pass']) : null;
    
    //Retrieve the user account information for the given username.
    $sql = "SELECT * FROM utilisateur WHERE profil = :username";
    $stmt = $bdd->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
		 header('Location: index.php?erreur=1');
        die('Incorrect username //// password combination!');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
        
        //Compare the passwords.

        //If $validPassword is TRUE, the login has been successful.
        if($passwordAttempt==$user['mdp']){
            
            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id-util'];
            $_SESSION['logged_in'] = time();
           if($user['img']!="") $_SESSION['img'] = 'trtm/'.$user['img']; else $_SESSION['img'] = 'trtm/profot/imgg.png';
            $_SESSION['user'] = $user['profil'];
            //$_SESSION['a'] = $user['adm'];
            $stmt->closeCursor();
            //Redirect to our protected page, which we called home.php
            header('Location: compte.php');
            exit;
            
        } else{
            //$validPassword was FALSE. Passwords do not match.
            //die('Incorrect username / password combination!');
            $stmt->closeCursor();
            header('Location: index.php?erreur=1');
        }
    }
    
}
 
?>