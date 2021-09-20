<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
 
  
  $reponse=$bdd->query('SELECT nom FROM cr WHERE nom= \''.$_POST['da'].'\' ');
  
  if(!($donnee=$reponse->fetch()))
  {
	
	$id_ut = $_SESSION['user_id'];
	
	$reponseClient=$bdd->prepare('INSERT INTO cr VALUES(:id_c,:nom ,:prenom ,:age ,:foie ,:coeur,:visicul ,:pancreas ,:rgd ,:rate,:autres,:conclusion)');
	
	$reponseClient->execute(array(
		                            'id_c' =>"",
		                            'nom' =>$_POST['sn'],
									'prenom' => $_POST['da'],
									'age' => $_POST['aa'],
									'foie' => $_POST['na'],
									'coeur' => $_POST['coeur'],
									'visicul' => $_POST['ml'],
									'pancreas' => $_POST['tel'],
									'rgd' => $_POST['fax'],
									'rate' => $_POST['ra'],
									'autres' => $_POST['au'],
									//'conclusion' => $_POST['co'],
									));	
	
	$reponseClient->closeCursor();
	$reponse->closeCursor();
s
	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>comte rendu éffectué avec succèe</strong> </center>
	</div>
	<?php		
//header("location:" . "../ajout.php");
	
  }
  else  { ?>
  <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	 
	<?php }?>
