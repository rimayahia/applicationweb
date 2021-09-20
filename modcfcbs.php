<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');
   include('../sess.php');
   $reponse=$bdd->query('SELECT date_rdv, heure_rdv FROM rdv WHERE date_rdv= \''.$_POST['aa'].'\' and heure_rdv= \''.$_POST['ab'].'\' ');

   if(!($donnee=$reponse->fetch()))
   {
 
   
  $reponse=$bdd->query('SELECT * FROM rdv WHERE id_rdv= \''.$_POST['mod'].'\' ');
  
  

  $reponse2=$bdd->prepare('UPDATE rdv SET  date_rdv = :date_rdv, heure_rdv = :heure_rdv, id_p = :id_p
 WHERE id_rdv= \''.$_POST['mod'].'\' ');

$reponse2->execute(array(

                  
                  'date_rdv' =>$_POST['aa'],
									'heure_rdv' =>$_POST['ab'],
									'id_p' =>$_POST['ns']
  )  );	


  /*$reponseAc=$bdd->prepare('INSERT INTO action VALUES(:id_ac ,:ac ,:dis_ac ,:date_ac ,:id_com)');
	
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
}


?>
   
   <meta http-equiv="refresh" content="0.5; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
