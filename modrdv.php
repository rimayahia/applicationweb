<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   if(isset($_POST['mod']))
   {
  
  $reponse=$bdd->query('SELECT * FROM rdv WHERE id_rdv= \''.$_POST['mod'].'\' ');
  $donnee=$reponse->fetch();
  $d=$donnee['date_rdv'];
  $h=$donnee['heure_rdv'];
  $resultat2=$bdd->query('SELECT nom,prenom  FROM patient where id_p=\''.$donnee['id_p'].'\'');
		$donnee2=$resultat2->fetch();
		$cntct=$donnee2['nom']." ".$donnee2['prenom'];
		
	?>
    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Modifier un rdv</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/modcfcbs.php" >
                          
                        <input type='hidden' name='mod' value="<?php echo $_POST['mod'];?>">
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">patient</label>
                            <div class="col-lg-6">


                            <select class="form-control" name="ns">
                            <?php     echo "<option value=".$donnee['id_p'].">".$cntct." </option>";
?>
<?php include('trtm/listpas.php');?>
</select>


                              </div>
                          </div>
                          

                          
                          
                          
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">date_rdv</label>
                            <div class="col-lg-6">
                            <select class="form-control" name="aa">   
                            <?php 
                          
                            echo "<option value=".$d.">".$d." </option>";
                            $p=0;
                            while($p<10){
                            
$date = date('Y-m-d',strtotime("+ $p days"));
//$date = date('Y-m-d',strtotime("+ 1 weeks"));
//$date = date('Y-m-d',strtotime("+ 1 month"));
//$date = date('Y-m-d',strtotime("+ 1 years"));

                            
$p=$p+1;

      echo "<option value=".$date.">".$date." </option>";
                              }
                              ?>
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">date_rdv</label>
                            <div class="col-lg-6">
                            <select class="form-control" name="ab">   
                            <?php 
                            echo "<option value=".$h.">".$h." </option>";
                          echo "<option value="."8:00".">8:00 </option>";
                          echo "<option value="."8:30".">8:30 </option>";
                          echo "<option value="."9:00".">9:00 </option>";
                          echo "<option value="."9:30".">9:30 </option>";
                          echo "<option value="."10:00".">10:00 </option>";
                          echo "<option value="."10:30".">10:30 </option>";
                          echo "<option value="."11:00".">11:00 </option>";
                          echo "<option value="."11:30".">11:30 </option>";
                          echo "<option value="."13:00".">13:00 </option>";
                          echo "<option value="."13:30".">13:30 </option>";
                          echo "<option value="."14:00".">14:00 </option>";
                          echo "<option value="."14:30".">14:30 </option>";
                          echo "<option value="."15:00".">15:00 </option>";
                          echo "<option value="."15:30".">15:30 </option>";
                          echo "<option value="."16:00".">16:00 </option>";
                          echo "<option value="."16:30".">16:30 </option>";
                          

                          ?>
                              </select>
                            </div>
                          </div>




                          

                          
                          

                          

                          
                         
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Modifier</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.replace('')">Annuler</button>
                            </div>
                          </div>
                        </form>
                        </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <?php                  
                }

?>  