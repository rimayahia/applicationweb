<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
  $reponse=$bdd->query('SELECT med1 FROM orr WHERE med1= \''.$_POST['sn'].'\' ');
  
  if(!($donnee=$reponse->fetch()))
  {
	
	$id_ut = $_SESSION['user_id'];
	 
	$reponseClient=$bdd->prepare('INSERT INTO orr VALUES(:id_o,:med1 ,:med2 ,:med3 ,:med4 ,:med5 ,:med6)');
	
	$reponseClient->execute(array(
		                            'id_o' =>"",
		                            'med1' =>$_POST['sn'],
									'med2' => $_POST['da'],
									'med3' => $_POST['aa'],
									'med4' => $_POST['na'],
									'med5' => $_POST['ml'],
									'med6' => $_POST['tel'],
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
	  <center><strong>patient avec cette orrdennance""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }?>
