<?php 
srand(time(0));
require('cnx.php');
//include('../cnx.php');
	
  $resultat=$bdd->query('SELECT * FROM patient');
  
  
	while($donnee=$resultat->fetch()){
		$cl=$donnee['id_p'];
		
		echo "<option value=".$cl.">".$donnee['nom']." ".$donnee['prenom']." </option>";
		
		

		
		


}

?>