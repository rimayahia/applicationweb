<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
     
	include('cnx.php');
	
	// $reponse=$bdd->query('SELECT nom, prenom FROM patient WHERE id_p = \''.$_POST['sup'].'\' ');
	 
	 
	 
		 $reponse2 =$bdd->query('DELETE FROM diag WHERE id_diag = \''.$_POST['sup'].'\' ');
		 
	
		 
	
		 //echo 'Etudiant de matricule '.$donnee['nom'].$donnee['prenom']  .'  de la base de données';
		 ?>
          <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
		 <div class="alert alert-warning">
		 <center>  supprimé</center>
	   </div>
	   <?php

		 $reponse2->closeCursor();
	 
	
?>