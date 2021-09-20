<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
  $reponse=$bdd->query('SELECT date_rdv, heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= \''.$_POST['na'].'\' ');
  
  if(!($donnee=$reponse->fetch()))
  {
	
	$id_ut = $_SESSION['user_id'];
	 
	$reponseClient=$bdd->prepare('INSERT INTO rdv VALUES(:id_rdv ,:date_rdv ,:heure_rdv ,:id_p)');
	
	$reponseClient->execute(array(
		                            'id_rdv' =>"",
									'date_rdv' => $_SESSION['j'],
									'heure_rdv' => $_POST['na'],
									'id_p' => $_SESSION['p']
								 
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

	<center><strong>rdv éffectué avec succèe</strong> </center>
	</div>
	<?php		
//header("location:" . "../ajout.php");
	
  }
  else  { ?>
  <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	  <div class="alert alert-danger">
	  <center><strong>patient avec ce rdv""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }?>
