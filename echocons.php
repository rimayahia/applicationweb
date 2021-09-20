<?php 
//srand(time(0));
require('cnx.php');

//include('../cnx.php');
	
  $resultat=$bdd->query('SELECT * FROM diag');
  $cp=1;
  
  
	while($donnee=$resultat->fetch()){
		$resultat1=$bdd->query('SELECT date_cons,id_p  FROM cons where id_cons=\''.$donnee['id_cons'].'\'');
		$donnee1=$resultat1->fetch();

		$resultat2=$bdd->query('SELECT nom,prenom  FROM patient where id_p=\''.$donnee1['id_p'].'\'');
		$donnee2=$resultat2->fetch();
		$com=$donnee2['nom']." ".$donnee2['prenom'];
		$cl=$donnee['id_diag'];
		echo "<tr>";
		echo "<td><center>".$cp." </center></td>";
		echo "<td><center>".$donnee1['date_cons']." </center></td>";
		echo "<td><center>".$com." </center></td>";
		echo "<td><center>".$donnee['mald']." </center></td>";
		echo "<td><center>".$donnee['sym']." </center></td>";
		
	 
	  
		//echo "<td><center>".$com." </center></td>";
		

		
		echo "<td><center>";
            //echo "<a href='modifier.php?mod=$matricule'>Modifier</a>  ";   
			echo "  <form   style='display:inline' action='' method='post' >
			<input type='hidden' name='mod' value='$cl'> 
			 <input type='image'alt='modifier' width='20' height='20' src='img/mod1.png' />
			  </form> ";
		
			  //if($_SESSION['a']=="oui"){  // echo "<a href='ajout.php?sup=$matricule'>Supprimer</a>";
			echo "  <form   style='display:inline' action='trtm/supdiag.php' method='post' >";
			 echo"      <input type='hidden' name='sup' value='$cl'>  
			  <input type='image' alt='supperimer' width='20' height='20' src='img/sup1.png' /></form>";
			  //}
			  echo "</center></td>";
		echo '</tr>';
		$cp=$cp+1;
if($donnee=$resultat->fetch()){
	$resultat1=$bdd->query('SELECT date_cons,id_p  FROM cons where id_cons=\''.$donnee['id_cons'].'\'');
		$donnee1=$resultat1->fetch();

		$resultat2=$bdd->query('SELECT nom,prenom  FROM patient where id_p=\''.$donnee1['id_p'].'\'');
		$donnee2=$resultat2->fetch();
		$com=$donnee2['nom']." ".$donnee2['prenom'];
		$cl=$donnee['id_diag'];
		echo "<tr>";
		echo "<td><center>".$cp." </center></td>";
		echo "<td><center>".$donnee1['date_cons']." </center></td>";
		echo "<td><center>".$com." </center></td>";
		echo "<td><center>".$donnee['mald']." </center></td>";
		echo "<td><center>".$donnee['sym']." </center></td>";
		
	 
 
		//echo "<td><center>".$com." </center></td>";
		

		
		echo "<td><center>";
            //echo "<a href='modifier.php?mod=$matricule'>Modifier</a>  ";   
			echo "  <form   style='display:inline' action='' method='post' >
			<input type='hidden' name='mod' value='$cl'> 
			 <input type='image'alt='modifier' width='20' height='20' src='img/mod1.png' />
			  </form> ";
		
			  //if($_SESSION['a']=="oui"){      // echo "<a href='ajout.php?sup=$matricule'>Supprimer</a>";
			echo "  <form   style='display:inline' action='trtm/supdiag.php' method='post' >";
			 echo"      <input type='hidden' name='sup' value='$cl'>  
			  <input type='image' alt='supperimer' width='20' height='20' src='img/sup1.png' /></form>";
			  //}
			  echo "</center></td>";
		echo '</tr>';
		$cp=$cp+1;

	}
}

?>