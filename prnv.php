
<?php 

 
srand(time(0));
require('trtm/cnx.php');
include('sess.php');
if (!empty($_POST['cmnt'])){
  $datetime = date("Y-m-d H:i:s");
	$id_ut =$_SESSION['user_id'];
	
	 
	$reponseClient=$bdd->prepare('INSERT INTO cmntcmpt VALUES(:id_cmnt ,:text_cmnt ,:id_com ,:id_soc ,:date_cmnt)');
	$reponseClient->execute(array(
		                            'id_cmnt'=>"",
		                            'text_cmnt' =>$_POST['cmnt'],
								              	'id_com' => $id_ut,
									              'id_soc' => $_GET["prf"],
							              		'date_cmnt' =>$datetime
									));

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  
  <title></title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/favicon.png" rel="apple-touch-icon">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

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
      <a href="compte.php" class="logo"><b>TECHNO<span>DYM</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        </ul>
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="dec.php">Déconnecté</a></li>
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
            
              <li class="active"><a href="compte.php">Compte</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li ><a href="consultant.php">Consultant</a></li>
              <?php if ($_SESSION['a']=="oui")echo"<li><a href="."commerciale.php".">Commerciale</a></li>";?>
            </ul>
          </li>
                 <!-- sidebar menu end-->
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-center">
                <center> <h1>Compte</h1></center>
                  <address>
                <strong></strong>

                
                <abbr title="Phone"></abbr 
              </address>
                </div>
               
                <div class="row">
                  <div class="col-md-9">
                  <?php 
                     $resultat=$bdd->query('SELECT * FROM compt where id_soc= \''.$_GET["prf"].'\'');
                     $donnee=$resultat->fetch();
                     ;?>
                    <h2><?php echo $donnee['nom_soc'];?></h2>
                    
                    <br>
                    <strong>   Site web :</strong><?php echo $donnee['sitew'];?>
                    <br> <strong>  Domaine d'activité :</strong><?php echo $donnee['dmn_act'];?>
                             
                    <br><strong>   Lieu :</strong><?php echo $donnee['lieu'];?>
                    <br><strong>  Effecif :</strong><?php echo $donnee['effectif'];?>
                               
                    
                                    </div>
                                    </div>
              <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>commentaires</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <br>
            <form action="" method="post">
              <div class="chat-txt">
                <input type="text" class="form-control" name="cmnt">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                </div>
              <button class="btn btn-theme">publier</button>
              </form>
              <?php 

	
  $resultat=$bdd->query('SELECT * FROM cmntcmpt where id_soc= \''.$_GET["prf"].'\' ORDER BY date_cmnt DESC');
  
  
	while($donnee=$resultat->fetch()){
		
  $resultat1=$bdd->query('SELECT nom_com,prenom_com  FROM commerciale where id_com =\''.$donnee['id_com'].'\'');
	$donnee1=$resultat1->fetch();
  $com=$donnee1['nom_com']." ".$donnee1['prenom_com'];
  
  echo " <div class="."'group-rom'".">";
  echo " <div class="."'first-part odd'".">".$com."</div>";
  echo "   <div class="."'second-part'".">".$donnee['text_cmnt']."</div>";
  echo "  <div class="."'third-part'".">".$donnee['date_cmnt']."</div>";
  echo " </div>";


           
	if($donnee=$resultat->fetch()){
		  $resultat1=$bdd->query('SELECT nom_com,prenom_com  FROM commerciale where id_com =\''.$donnee['id_com'].'\'');
	$donnee1=$resultat1->fetch();
	$com=$donnee1['nom_com']." ".$donnee1['prenom_com'];

            
            echo " <div class="."'group-rom'".">";
  echo " <div class="."'first-part'".">".$com."</div>";
  echo "   <div class="."'second-part'".">".$donnee['text_cmnt']."</div>";
  echo "  <div class="."'third-part'".">".$donnee['date_cmnt']."</div>";
  echo " </div>";
  }}?>
          </aside>
          
        </div>
      </section>  
     
    <!-- /MAIN CONTENT -->
    <!--main content end-->
   
  
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>technodym</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
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
 <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>






</body>

</html>
