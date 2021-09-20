
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

  <!-- =======================================================
  
  ======================================================= -->
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
              
              
              <?php if ($_SESSION['user']=="medcin")echo" 
                <li><a href="."cn.php".">Diagnostique</a></li>
      
              <li><a href="."cr.php".">compte rendu</a></li>
              <li ><a href="."or.php".">ordononance</a></li>
              <li class="."active"."><a href="."lt.php".">lettre de liason</a></li>
              <li><a href="."facture.php".">factures</a></li>  ";?>
              <?php //if ($_SESSION['a']=="oui")echo"<li><a href="."commerciale.php".">Commerciale</a></li>";?>
              
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
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
                    <a data-toggle="tab" href="#overview">liste des lettre de liaison</a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#edit">Modifier un lettre de liaison </a>
                  </li>

                  <?php
	
  }

  else
  { ?>

<li class="active">
                    <a data-toggle="tab" href="#overview">liste des lettre de liaison</a>
                  </li>
                  <li >
                    <a data-toggle="tab" href="#edit">Modifier un lettre de liaison</a>
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

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                <th><center>N°</center></th>
                                  <th><center>nom_med</center></th>
                                  <th><center>prenom_med</center></th>
                                  <th><center>date_lt</center></th>
                                  <th><center>lettre</center></th>
                                  <th><center>Action</center></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php include('trtm/echolt.php');?>
                              </tbody>
                            </table>
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
<?php include('trtm/mod.php');?>

<?php
}

else
{ ?>
                  <div id="edit" class="tab-pane">
                  



                  
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Nouvel lettre de liason</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/insctlt.php" >
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">nom_med</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sn" name="sn" class="form-control">
                            </div>
                          </div>
                          


                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">prenom_med</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="da" name="da" class="form-control">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">date_lt</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="aa" name="aa" class="form-control">
                            </div>
                          </div>

                          
						  <div class="form-group">
                            <label class="col-lg-2 control-label">lettre</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="na" name="na" class="form-control">
                            </div>
                          </div>
		 
						  
 
                  

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Ajouter</button>
                              <button class="btn btn-theme04" type="button">Annuler</button>
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
  </section>
   <!-- js placed at the end of the document so the pages load faster -->
   <script src="lib/jquery/jquery.min.js"></script>
   <script src="lib/bootstrap/js/bootstrap.min.js"></script>
   <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
   <script src="lib/jquery.scrollTo.min.js"></script>
   <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="lib/common-scripts.js"></script>
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="js/sb-admin-2.min.js"></script>
 <script src="vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="js/demo/datatables-demo.js"></script>
</body>
</html>


