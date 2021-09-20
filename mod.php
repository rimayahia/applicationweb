<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   if(isset($_POST['mod']))
   {
  
  $reponse=$bdd->query('SELECT * FROM patient WHERE id_p= \''.$_POST['mod'].'\' ');
 
  $donnee=$reponse->fetch();
  
	?>
    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Modifier un patient</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/modcf.php" >
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sn" name="sn" class="form-control" value="<?php echo $donnee['nom']?>">
                              <input type='hidden' name='mod' value="<?php echo $donnee['id_p']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">prenom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sw" name="sw" class="form-control" value="<?php echo $donnee['prenom']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">nom de jeune fille </label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="da" name="da" class="form-control" value="<?php echo $donnee['njf']?>">
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-lg-2 control-label">date de naiss</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="lc" name="lc" class="form-control"value="<?php echo $donnee['dans']?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">adresse</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ef" name="ef" class="form-control" value="<?php echo $donnee['adresse']?>" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">telephone</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ml" name="ml" class="form-control" value="<?php echo $donnee['telephone']?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">sexe</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="tl" name="tl" class="form-control"value="<?php echo $donnee['sexe']?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Modfier</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.replace('')">Annuler</button>
							 
                            </div>
                          </div>
                        </form>
                        </div>
                    </div>
                  </div>
                  <?php                  
                }

?>  