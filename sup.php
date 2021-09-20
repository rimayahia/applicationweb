<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
     
	include('cnx.php');
	
	 $reponse=$bdd->query('SELECT nom, prenom FROM patient WHERE id_p = \''.$_POST['sup'].'\' ');
	 
	 
	 if($donnee=$reponse->fetch())
	 {
		 $reponse2 =$bdd->query('DELETE FROM patient WHERE id_p = \''.$_POST['sup'].'\' ');
		 
	/*	 $datetime = date("Y-m-d H:i:s");
	$id_ut ="001"; //$_SESSION['user_id'];
	
	$disc= "le laboratoire ".$donnee['intitut'];
									$ac="supprimer";
	
									$reponseAc=$bdd->prepare('INSERT INTO action VALUES(:id_ac ,:ac ,:dis_ac ,:date_ac ,:id_com)');
	
									$reponseAc->execute(array(
										                            'id_ac' =>"",
				                                                    'ac' =>$ac,
																	'dis_ac' => $disc,
																	'date_ac' => $datetime,
																	'id_com' => $id_ut
																	));	
	*/
	
		 //echo 'Etudiant de matricule '.$donnee['nom'].$donnee['prenom']  .'  de la base de données';
		 ?>
          <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
		 <div class="alert alert-warning">
		 <center> <strong>"le patient"<?php echo $donnee['nom']." ".$donnee['prenom'];?>"" </strong>est supprimé</center>
	   </div>
	   <?php

		 $reponse2->closeCursor();
	 }
	 else
       echo '';
	
	$reponse->closeCursor();
	
?>