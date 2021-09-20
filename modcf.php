<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   $datetime = date("Y-m-d H:i:s");
	//$id_ut ="001"; //$_SESSION['user_id'];
  
 /* $ac="modifier";
  $reponse=$bdd->query('SELECT * FROM labo WHERE id_labo= \''.$_POST['mod'].'\' ');
  
  $donnee=$reponse->fetch();
  $modif="dans le compte ".$donnee['intitut']." en remplacant :";
  $modif1="dans le compte ".$donnee['intitut']." en remplacant :";

  if($donnee['intitut']!=$_POST['sn'])
  {
    $modif = $modif.$donnee['intitut']." par ".$_POST['sn']. ";";
  }
  if($donnee['intitut_ar']!=$_POST['sw'])
  {
    $modif=$modif.$donnee['intitut_ar']." par ".$_POST['sw'].";";
  }
  if($donnee['acronyme']!=$_POST['da'])
  {
    $modif=$modif.$donnee['acronyme']." par ".$_POST['da'].";";
  }
  if($donnee['an_agrement']!=$_POST['lc'])
  {
    $modif=$modif.$donnee['an_agrement']." par ".$_POST['lc'].";";
  }

  if($donnee['num_arret']!=$_POST['ef'])
  {
    $modif=$modif.$donnee['num_arret']." par ".$_POST['ef'].";";
  }


  if($donnee['email']!=$_POST['ml'])
  {
    $modif=$modif.$donnee['email']." par ".$_POST['ml'].";";
  }

  if($donnee['tel_fax1']!=$_POST['tl'])
  {
    $modif=$modif.$donnee['tel_fax1']." par ".$_POST['tl'].";";
  }
  

  if($donnee['tel_fax2']!=$_POST['fx'])
  {
    $modif=$modif.$donnee['tel_fax2']." par ".$_POST['fx'].";";
  }
*/

//if($modif!=$modif1)
//{

  $reponse2=$bdd->prepare('UPDATE patient SET  nom = :nom, prenom = :prenom, njf = :njf, dans = :dans, sexe = :sexe, telephone = :telephone, adresse = :adresse
   WHERE id_p= \''.$_POST['mod'].'\' ');

$reponse2->execute(array(
  'nom' => $_POST['sn'] , 
  'prenom' => $_POST['sw'] , 
  'njf' => $_POST['da'],
  'dans' => $_POST['lc'],
  'sexe' => $_POST['tl'] , 
  'telephone' => $_POST['ml'] , 
  'adresse' => $_POST['ef']
 )
  );	

/*
  $reponseAc=$bdd->prepare('INSERT INTO action VALUES(:id_ac ,:ac ,:dis_ac ,:date_ac ,:id_com)');
	
  $reponseAc->execute(array(
                                'id_ac' =>"",
                                            'ac' =>$ac,
                  'dis_ac' => $modif,
                  'date_ac' => $datetime,
                  'id_com' => $id_ut
                  ));	

*/
                  ?>
                  <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
                  <div class="alert alert-success">
                
                  <center><strong>modification éffectué avec succèe</strong> </center>
                  </div>
                  <?php	
//}


?>
   <meta http-equiv="refresh" content="0.5; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />

 