
<?php include('sess.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/favicon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="compte.php" class="logo"><b><span>cabinet médical</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <ul class="nav top-menu">
        </ul>
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="dec.php">Déconnecté</a></li>
          <li><a class="logout" href="apropos.php">A Propos</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="compte.php"><img src="<?php echo $_SESSION['img'];?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['user'];?></h5>
          
          
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Pages</span>
              </a>
            <ul class="sub">
              
              <li ><a href="compte.php">patient</a></li>
              <?php if ($_SESSION['user']=="medcin")echo" <li><a href="."cr.php".">comte rendu</a></li>
              <li><a href="."or.php".">ordononance</a></li>
              <li><a href="."lt.php".">lettre de liason</a></li> ";?>
              <?php if ($_SESSION['user']=="secritaire")echo"<li class="."active"."><a href="."rdv.php".">rdv</a></li>";?>
         
              
             
              <?php //if ($_SESSION['a']=="oui")echo"<li><a href="."commerciale.php".">Commerciale</a></li>";?>
              
            </ul>
          </li>

        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper site-min-height">
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                <?php
	
  

  if(isset($_POST['mod']))
  { ?>
                  <li>
                    <a data-toggle="tab" href="#overview">La liste des rdv</a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#edit">Modifier un rdv </a>
                  </li>

                  <?php
	
  }

  else
  {
  

  if(isset($_POST['aa']))


  {   ?>
    <li>
      <a data-toggle="tab" href="#overview">La liste des rdv</a>
    </li>
    <li class="active">
      <a data-toggle="tab" href="#edit">Ajouter un rdv </a>
    </li>

    <?php

  }
else


  { ?>

<li class="active">
                    <a data-toggle="tab" href="#overview">La liste des rdv</a>
                  </li>
                  <li >
                    <a data-toggle="tab" href="#edit">ajouter un rdv</a>
                  </li>

                  <?php
	
} }

   ?>



  
                  
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">


                <?php

                if(isset($_POST['mod']) or isset($_POST['aa']))
  { ?>
<div id="overview" class="tab-pane">
<?php
}

else
{ ?>
                  <div id="overview" class="tab-pane active">
                  <?php                  
                }

?>
                
                    <div class="row">
                                          
                        
                      
                          <div class="col-md-12 col-md-offset-0">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                <th><center>N°</center></th>
                                  <th><center>nom</center></th>
                                  <th><center>prénom</center></th>
                                  <th><center>date_rdv</center></th>
                                  <th><center>heure_rdv</center></th>
								                  <th><center>Action</center></th>
                                  
                                </tr>
                              </thead>
                              
                              <tbody>
                                <?php include('trtm/echordv.php');?>

                                


                              </tbody>
                            </table>


                            








                            
                        
                        <!-- /row -->
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                
                  <!-- /tab-pane -->

                  <?php  if(isset($_POST['mod']))
  { ?>
<div id="edit" class="tab-pane active">
<?php include('trtm/modrdv.php');?>

<?php
}

else
{ ?>


<?php

                if(isset($_POST['aa']))
  { 
    
    $_SESSION['j']=$_POST['aa'];
    $_SESSION['p']=$_POST['ns'];
    ?>
<div id="edit" class="tab-pane active">

<div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Nouveau rdv</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/insctrdv.php" >
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label">heure_rdv</label>
                            <div class="col-lg-6">
                            
                            <select class="form-control" name="na">
                            <?php
                            $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "8:00" ');
  
  if(!($donnee=$reponse->fetch()))
  {
    echo "  <option value="."8:00".">8:00 </option>";} 
     $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "8:30" ');
  
  if(!($donnee=$reponse->fetch()))
  {
    echo "  <option value="."8:30".">8:30 </option>";}
    
    $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "9:00" ');
  
    if(!($donnee=$reponse->fetch()))
    {
      echo "  <option value="."9:00".">9:00 </option>";}


      $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "9:30" ');
  
      if(!($donnee=$reponse->fetch()))
      {
        echo "  <option value="."9:30".">9:30 </option>";}



        $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "10:00" ');
  
        if(!($donnee=$reponse->fetch()))
        {
          echo "  <option value="."10:00".">10:00 </option>";}


          $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "10:30" ');
  
    if(!($donnee=$reponse->fetch()))
    {
      echo "  <option value="."10:30".">10:30 </option>";}

      $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "11:00" ');
  
    if(!($donnee=$reponse->fetch()))
    {
      echo "  <option value="."11:00".">11:00 </option>";}
      $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "11:30" ');
  
    if(!($donnee=$reponse->fetch()))
    {
      echo "  <option value="."11:30".">11:30 </option>";}




      $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "13:00" ');
  
      if(!($donnee=$reponse->fetch()))
      {
        echo "  <option value="."13:00".">13:00 </option>";} 
         $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "13:30" ');
      
      if(!($donnee=$reponse->fetch()))
      {
        echo "  <option value="."13:30".">13:30 </option>";}
        
        $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "14:00" ');
      
        if(!($donnee=$reponse->fetch()))
        {
          echo "  <option value="."14:00".">14:00 </option>";}
    
    
          $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "14:30" ');
      
          if(!($donnee=$reponse->fetch()))
          {
            echo "  <option value="."14:30".">14:30 </option>";}
    
    
    
            $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "15:00" ');
      
            if(!($donnee=$reponse->fetch()))
            {
              echo "  <option value="."15:00".">15:00 </option>";}
    
    
              $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "15:30" ');
      
        if(!($donnee=$reponse->fetch()))
        {
          echo "  <option value="."15:30".">15:30 </option>";}
    
          $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "16:00" ');
      
        if(!($donnee=$reponse->fetch()))
        {
          echo "  <option value="."16:00".">16:00 </option>";}
          $reponse=$bdd->query('SELECT heure_rdv FROM rdv WHERE date_rdv= \''.$_SESSION['j'].'\' and heure_rdv= "16:30" ');
      
        if(!($donnee=$reponse->fetch()))
        {
          echo "  <option value="."16:30".">16:30 </option>";}
    






    ?>
                             
                              

                              </select>
                            
                            </div>
                          </div>

						 
						  
					 
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Ajouter</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.replace('')">Annuler</button>
                            </div>
                          </div>

                          </form> 





<?php
}

else
{ ?>
                  



                  




                  <div id="edit" class="tab-pane">
                  



                  
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Nouveau rdv</h4>
                        

                        <form role="form" class="form-horizontal"method="post" action="" >
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">patient</label>
                            <div class="col-lg-6">


                            <select class="form-control" name="ns">


<?php include('trtm/listpas.php');?>
</select>


                              </div>
                          </div>
                          

                          
                          
                          
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">date_rdv</label>
                            <div class="col-lg-6">
                            <select class="form-control" name="aa">   
                            <?php $p=0;
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
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">suivant</button>
                              
                            </div>
                          </div>
                        </form>


                        <?php                  
                }

?>            
						  
                        
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>


                  <?php                  
                }

?>  
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
   <!-- js placed at the end of the document so the pages load faster -->
   <script src="lib/jquery/jquery.min.js"></script>
   <script src="lib/bootstrap/js/bootstrap.min.js"></script>
   <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
   <script src="lib/jquery.scrollTo.min.js"></script>
   <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
   <!--common script for all pages-->
   <script src="lib/common-scripts.js"></script>
   <!--script for this page-->
  
 

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="js/demo/datatables-demo.js"></script>






</body>

</html>