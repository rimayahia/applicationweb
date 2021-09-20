<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
  $reponse=$bdd->query('SELECT ltt FROM lt WHERE ltt= \''.$_POST['sn'].'\' ');
  
  if(!($donnee=$reponse->fetch()))
  {
	
	$id_ut = $_SESSION['user_id'];
	 
	$reponseClient=$bdd->prepare('INSERT INTO lt VALUES(:id_l,:nom_med ,:prenom_med ,:date_lt ,:ltt)');
	
	$reponseClient->execute(array(
		                            'id_l' =>"",
		                            'nom_med' =>$_POST['sn'],
									'prenom_med' => $_POST['da'],
									'date_lt' => $_POST['aa'],
									'ltt' => $_POST['na'],
								 
								));	
								
	
	*/
	$reponseClient->closeCursor();
	$reponse->closeCursor();





	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>Inscription éffectué avec succèe</strong> </center>
	</div>
	<?php		
//header("location:" . "../ajout.php");
	
  }
  else  { ?>
  <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	  <div class="alert alert-danger">
	  <center><strong>patient avec cette lettre ""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }?>
