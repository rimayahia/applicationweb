<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
  $reponse=$bdd->query('SELECT id_fact FROM facture WHERE =');
  
  if(!($donnee=$reponse->fetch()))
  {
	$datetime = date("Y-m-d");
	$id_ut = $_SESSION['user_id'];
	 
	$reponseClient=$bdd->prepare('INSERT INTO facture VALUES(:id_fact,:num,:total ,:date ,:dans ,:sexe ,:telephone ,:adresse ,:datte)');
	
	$reponseClient->execute(array(
		                            'id_fact' =>"",
		                            'nom' =>$_POST['sn'],
									'prenom' => $_POST['da'],
									'id-P' => $_POST['aa'],
									'dans' => $_POST['na'],
									'sexe' => $_POST['fax'],
									'telephone' => $_POST['tel'],
									'adresse' => $_POST['ml'],
									'datte' => $datetime
									));	
	
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
	  <center><strong>client avec cette email ""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }?>
