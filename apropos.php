<?php include('sess.php');
unset($_SESSION['id_cons']);
?>
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
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <li><a class="logout" href="dec.php">Déconnecté</a><br></li>
          
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
              
              <li><a href="compte.php">patient</a></li>
              
              <?php if ($_SESSION['user']=="medcin")echo" 
                <li><a href="."cn.php".">Diagnostique</a></li>
      
              <li><a href="."cr.php".">compte rendu</a></li>
              <li><a href="."or.php".">ordononance</a></li>
              <li><a href="."lt.php".">lettre de liason</a></li>
              <li><a href="."facture.php".">factures</a></li> ";?>
              <?php if ($_SESSION['user']=="secritaire")echo"<li><a href="."rdv.php".">rdv</a></li>";?>
              
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
                  
                  <?php }
  else
  { ?>
<li class="active">
                    <a data-toggle="tab" href="#overview"><h3>A propos de notre cabenet médicale</h3></a>
                  </li>
                 

                  <?php
	
  }
   ?>               
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                <?php

                if(isset($_POST['mod']))
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

                          <center> <p><h4>Réaliser par:</h4><li>yahia rima</li>
                          <li>saadoune dyhia </li>
                         <li>  tahi chahinez</li>
                         <li> redouan nihade </li>
                         <li> saal nada</li>
                         <h4> on a réalisé c'est application pour aidez vous çi il aura un probléme contactez nous sur notre 
                         l'email:<li> <i>cabinemédicale@gmail.com </i></li>
                         <li><i>medcin1818@gmail.com</i></li></h4>
                        <br></p></center>
                      </div>
                    </div>
                  </div>
                  <?php  if(isset($_POST['mod']))
  { ?>
<div id="edit" class="tab-pane active">
<?php include('trtm/mod.php');?>

<?php
}

else
{ ?>
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Nouveau patient</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/insctcmpt.php" >
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">nom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sn" name="sn" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">prénom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="da" name="da" class="form-control">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">nom de jeune fille</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="aa" name="aa" class="form-control">
                            </div>
                          </div>

                          
						  <div class="form-group">
                            <label class="col-lg-2 control-label">date de naiss</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="na" name="na" class="form-control">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">adress</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ml" name="ml" class="form-control">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">telephone</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="tel" name="tel" class="form-control">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">sexe</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="fax" name="fax" class="form-control">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Ajouter</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.replace('')">Annuler</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php                           }  ?>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
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