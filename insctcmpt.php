<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
  $reponse=$bdd->query('SELECT telephone FROM patient WHERE telephone= \''.$_POST['tel'].'\' ');
  
  if(!($donnee=$reponse->fetch()))
  {
	$datetime = date("Y-m-d");
	$id_ut = $_SESSION['user_id'];
	 
	$reponseClient=$bdd->prepare('INSERT INTO patient VALUES(:id_p,:nom ,:prenom ,:njf ,:dans ,:sexe ,:telephone ,:adresse ,:datte)');
	
	$reponseClient->execute(array(
		                            'id_p' =>"",
		                            'nom' =>$_POST['sn'],
									'prenom' => $_POST['da'],
									'njf' => $_POST['aa'],
									'dans' => $_POST['na'],
									'sexe' => $_POST['fax'],
									'telephone' => $_POST['tel'],
									'adresse' => $_POST['ml'],
									'datte' => $datetime
									));	
	
									//$disc= "un nouveau laboratoire".$_POST['sn'];
									//$ac="Ajouter";
	
									//$reponseAc=$bdd->prepare('INSERT INTO action VALUES(:id_ac ,:ac ,:dis_ac ,:date_ac ,:id_com)');
	
									/*$reponseAc->execute(array(
										                            'id_ac' =>"",
				                                                    'ac' =>$ac,
																	'dis_ac' => $disc,
																	'date_ac' => $datetime,
																	'id_com' => $id_ut
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
	  <center><strong>client avec cette email ""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }?>
