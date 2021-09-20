<?php 
//srand(time(0));
require('cnx.php');

//include('../cnx.php');
	
  $resultat=$bdd->query('SELECT * FROM cr');
  $cp=1;
  
  
	while($donnee=$resultat->fetch()){
		//$resultat1=$bdd->query('SELECT nom_com,prenom_com  FROM commerciale where id_com=\''.$donnee['id_com'].'\'');
		//$donnee1=$resultat1->fetch();
		//$com=$donnee1['nom_com']." ".$donnee1['prenom_com'];
		$cl=$donnee['id_c'];
		echo "<tr>";
		echo "<td><center>".$cp." </center></td>";
		echo "<td><center>".$donnee['nom']."</a> </center></td>";
		echo "<td><center>".$donnee['prenom']." </center></td>";
		echo "<td><center>".$donnee['age']." </center></td>";
		echo "<td><center>".$donnee['foie']." </center></td>";
		echo "<td><center>".$donnee['coeur']." </center></td>";
		echo "<td><center>".$donnee['visicul']." </center></td>";
		echo "<td><center>".$donnee['pancreas']." </center></td>";
		echo "<td><center>".$donnee['rgd']." </center></td>";
		echo "<td><center>".$donnee['rate']." </center></td>";
		echo "<td><center>".$donnee['autres']." </center></td>";
		echo "<td><center>".$donnee['conclusion']." </center></td>";
		//echo "<td><center>".$com." </center></td>";
		

		
		echo "<td><center>";
            //echo "<a href='modifier.php?mod=$matricule'>Modifier</a>  ";   
			echo "  <form   style='display:inline' action='' method='post' >
			<input type='hidden' name='mod' value='$cl'> 
			 <input type='image'alt='modifier' width='20' height='20' src='img/mod1.png' />
			  </form> ";
		
			  //if($_SESSION['a']=="oui"){  // echo "<a href='ajout.php?sup=$matricule'>Supprimer</a>";
			echo "  <form   style='display:inline' action='trtm/supcn.php' method='post' >";
			 echo"      <input type='hidden' name='sup' value='$cl'>  
			  <input type='image' alt='supperimer' width='20' height='20' src='img/sup1.png' /></form>";
			  //}
			  echo "</center></td>";
		echo '</tr>';
		$cp=$cp+1;
if($donnee=$resultat->fetch()){
	//$resultat1=$bdd->query('SELECT nom_com,prenom_com  FROM commerciale where id_com=\''.$donnee['id_com'].'\'');
		//$donnee1=$resultat1->fetch();
		//$com=$donnee1['nom_com']." ".$donnee1['prenom_com'];
		$cl=$donnee['id_c'];
		echo '<tr >';
		echo "<td><center>".$cp." </center></td>";
		echo "<td><center>".$donnee['nom']."</a> </center></td>";
		echo "<td><center>".$donnee['prenom']." </center></td>";
		echo "<td><center>".$donnee['age']." </center></td>";
		echo "<td><center>".$donnee['foie']." </center></td>";
		echo "<td><center>".$donnee['coeur']." </center></td>";
		echo "<td><center>".$donnee['visicul']." </center></td>";
		echo "<td><center>".$donnee['pancreas']." </center></td>";
		echo "<td><center>".$donnee['rgd']." </center></td>";
		echo "<td><center>".$donnee['rate']." </center></td>";
		echo "<td><center>".$donnee['autres']." </center></td>";
		echo "<td><center>".$donnee['conclusion']." </center></td>";
		//echo "<td><center>".$com." </center></td>";
		

		
		echo "<td><center>";
            //echo "<a href='modifier.php?mod=$matricule'>Modifier</a>  ";   
			echo "  <form   style='display:inline' action='' method='post' >
			<input type='hidden' name='mod' value='$cl'> 
			 <input type='image'alt='modifier' width='20' height='20' src='img/mod1.png' />
			  </form> ";
		
			  //if($_SESSION['a']=="oui"){      // echo "<a href='ajout.php?sup=$matricule'>Supprimer</a>";
			echo "  <form   style='display:inline' action='trtm/supcn.php' method='post' >";
			 echo"      <input type='hidden' name='sup' value='$cl'>  
			  <input type='image' alt='supperimer' width='20' height='20' src='img/sup1.png' /></form>";
			  //}
			  echo "</center></td>";
		echo '</tr>';
		$cp=$cp+1;

	}
}

?>