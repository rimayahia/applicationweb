
<?php 

 
srand(time(0));
require('trtm/cnx.php');
include('sess.php');
if (!empty($_POST['cmnt1'])){
  if (empty($_SESSION['id_cons'])){
  $datet = date("Y-m-d");
	$id_ut =$_SESSION['user_id'];
	
	 
	$reponseClient=$bdd->prepare('INSERT INTO cons VALUES(:id_cons ,:date_cons ,:id_util ,:id_p )');
	
	$reponseClient->execute(array(
		                            'id_cons'=>"",
		                            'date_cons' => $datet,
									'id_util' => $id_ut,
									'id_p' => $_GET["prf"]
									
                  ));
 $resultat2=$bdd->query('SELECT id_cons FROM cons ORDER BY id_cons DESC');
                     $donnee2=$resultat2->fetch();  
                     $_SESSION['id_cons'] = $donnee2['id_cons'];    }  

$reponseClient=$bdd->prepare('INSERT INTO diag VALUES(:id_diag ,:mald ,:sym ,:id_cons )');
	
	$reponseClient->execute(array(
		                            'id_diag'=>"",
		                            'mald' => $_POST['cmnt1'],
									'sym' => $_POST['cmnt2'],
									'id_cons' => $_SESSION['id_cons']
									
                  ));

                
}
///////////////////////////////////////////////////////////
if (!empty($_POST['cmnt3'])){
  if (empty($_SESSION['id_cons'])){
  $datet = date("Y-m-d");
	$id_ut =$_SESSION['user_id'];
	
	 
	$reponseClient=$bdd->prepare('INSERT INTO cons VALUES(:id_cons ,:date_cons ,:id_util ,:id_p )');
	
	$reponseClient->execute(array(
		                            'id_cons'=>"",
		                            'date_cons' => $datet,
									'id_util' => $id_ut,
									'id_p' => $_GET["prf"]
									
                  ));
 $resultat2=$bdd->query('SELECT id_cons FROM cons ORDER BY id_cons DESC');
                     $donnee2=$resultat2->fetch();  
                     $_SESSION['id_cons'] = $donnee2['id_cons'];    }  
                     $resultat5=$bdd->query('SELECT * FROM patient where id_p= \''.$_GET["prf"].'\'');
                     $donnee5=$resultat5->fetch();

$reponseClient=$bdd->prepare('INSERT INTO cr VALUES(:id_c,:nom ,:prenom ,:age ,:foie ,:vb ,:pancreas ,:rgd ,:rate,:autres,:conclusion ,:id_cons)');
	
$reponseClient->execute(array(
  'id_c' =>"",
  'nom' =>$donnee5['nom'],
'prenom' => $donnee5['prenom'],
'age' => $donnee5['dans'],
'foie' => $_POST['cmnt3'],
'coeur' => $_POST['cmnt33'],
'visicul' => $_POST['cmnt4'],
'pancreas' => $_POST['cmnt5'],
'rgd' => $_POST['cmnt6'],
'rate' => $_POST['cmnt7'],
'autres' => $_POST['cmnt8'],
'conclusion' => $_POST['cmnt9'],
'id_cons' => $_SESSION['id_cons']
));
	
                

}
/////////////////////////////////////////////////////////////
if (!empty($_POST['cmnt10'])){
  if (empty($_SESSION['id_cons'])){
  $datet = date("Y-m-d");
	$id_ut =$_SESSION['user_id'];
	
	 
	$reponseClient=$bdd->prepare('INSERT INTO cons VALUES(:id_cons ,:date_cons ,:id_util ,:id_p )');
	
	$reponseClient->execute(array(
		                            'id_cons'=>"",
		                            'date_cons' => $datet,
									'id_util' => $id_ut,
									'id_p' => $_GET["prf"]
									
                  ));
 $resultat2=$bdd->query('SELECT id_cons FROM cons ORDER BY id_cons DESC');
                     $donnee2=$resultat2->fetch();  
                     $_SESSION['id_cons'] = $donnee2['id_cons'];    }  
                     

$reponseClient=$bdd->prepare('INSERT INTO orr VALUES(:id_o,:med1 ,:med2 ,:med3 ,:med4 ,:med5 ,:med6,:med7 ,:id_cons)');
	
$reponseClient->execute(array(
  'id_o' =>"",
  'med1' =>$_POST['cmnt10'],
'med2' => $_POST['cmnt11'],
'med3' => $_POST['cmnt12'],
'med4' => $_POST['cmnt13'],
'med5' => $_POST['cmnt14'],
'med6' => $_POST['cmnt15'],
'med7' => $_POST['cmnt33'],
'id_cons' => $_SESSION['id_cons']
));
	
              

}


if (!empty($_POST['cmnt16'])){
  if (empty($_SESSION['id_cons'])){
  $datet = date("Y-m-d");
	$id_ut =$_SESSION['user_id'];
	
	 
	$reponseClient=$bdd->prepare('INSERT INTO cons VALUES(:id_cons ,:date_cons ,:id_util ,:id_p )');
	
	$reponseClient->execute(array(
		                            'id_cons'=>"",
		                            'date_cons' => $datet,
									'id_util' => $id_ut,
									'id_p' => $_GET["prf"]
									
                  ));
 $resultat2=$bdd->query('SELECT id_cons FROM cons ORDER BY id_cons DESC');
                     $donnee2=$resultat2->fetch();  
                     $_SESSION['id_cons'] = $donnee2['id_cons'];    }  
                     
                     $datet = date("Y-m-d");
$reponseClient=$bdd->prepare('INSERT INTO lt VALUES(:id_l,:nom_med ,:prenom_med ,:date_lt ,:lettr ,:id_cons)');
	
$reponseClient->execute(array(
  'id_l' =>"",
  'nom_med' =>$_POST['cmnt16'],
  'prenom_med' =>$_POST['cmnt18'],
  'date_lt' =>$datet,
'lettr' => $_POST['cmnt17'],
'id_cons' => $_SESSION['id_cons']
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
  
  <title>admin</title>

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
      <a href="compte.php" class="logo"><b><span>cabinet médical</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <!-- settings end -->
          <!-- inbox dropdown start-->
          
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="dec.php">Déconnecté</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
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
              
              <li class="active"><a href="compte.php">patient</a></li>
              
              <?php if ($_SESSION['user']=="medcin")echo" 
                <li><a href="."cn.php".">Diagnostique</a></li>
      
              <li><a href="."cr.php".">comte rendu</a></li>
              <li><a href="."or.php".">ordononance</a></li>
              <li><a href="."lt.php".">lettre de liason</a></li> ";?>
              <?php if ($_SESSION['user']=="secritaire")echo"<li><a href="."rdv.php".">rdv</a></li>";?>
              </ul>
          </li>
              
                 <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-center">
                <center> <h1>consultation</h1></center>
                  <address>
                <strong></strong>

                
                <abbr title="Phone"></abbr 
              </address>
                </div>
                <!-- /pull-left -->
                
                <!-- /pull-right -->
               
                <div class="row">
                  <div class="col-md-9">
                  <?php 
                     $resultat=$bdd->query('SELECT * FROM patient where id_p= \''.$_GET["prf"].'\'');
                     $donnee=$resultat->fetch();

                     //$resultat2=$bdd->query('SELECT nom_cntct, prenom_cntct FROM contact where id_cntct = \''.$donnee['id_cntct'].'\'');
                     //$donnee2=$resultat2->fetch();
                    // $cntct=$donnee2['nom_cntct']." ".$donnee2['prenom_cntct'];
                     //$resultat3=$bdd->query('SELECT nom_con,prenom_con FROM consultant where id_con = \''.$donnee['id_con'].'\'');
                     //$donnee3=$resultat3->fetch();
                     //$con=$donnee3['nom_con']." ".$donnee3['prenom_con'];


                     ;?>
                    <h2><?php //echo $donnee['titre'];?>
                    
                    <br>
                    <strong>   nom :</strong><?php echo $donnee['nom'];?>
                    <br> <strong>  prenom:</strong><?php echo $donnee['prenom'];?></h2>

                    <br>
                    <strong>   nom de jeun fille:</strong><?php echo $donnee['njf'];?>
                    <br> <strong>  Date de naissance :</strong><?php echo $donnee['dans'];?>
                             
                    <br><strong>  Adresse  :</strong><?php echo $donnee['adresse'];?>
                    <br><strong>  Telephone:</strong><?php echo $donnee['telephone'];?>
                    <br>
                    <strong>    sexe:</strong><?php  echo $donnee['sexe'] ;?>
                              
                    
                                    </div>
                                    </div>

     

                                    <?php if ($_SESSION['user']=="medcin"){ ?>

              <!--/col-lg-12 mt -->
              <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Diagnostique</h3>
              
            </div>
            <br>
            <form action="" method="post">
            
            <label class="col-lg-2 control-label">Type de maladie</label>
              <div class="chat-txt">
                <input type="text" class="form-control" name="cmnt1">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                </div>

                <br>  <br>  <br>
                <label class="col-lg-2 control-label">symthome</label>
              <div class="chat-txt">
                <input type="text" class="form-control" name="cmnt2">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                </div>

              <button class="btn btn-theme">Ajouter</button>
              </form>
            
              <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
<h3>Compte rendu</h3>
              
            </div>
            <br>
            <form action="" method="post">
            <label class="col-lg-2 control-label">foie</label>

              <div class="chat-txt">
                <input type="text" class="form-control" name="cmnt3">
              </div>
              <br>  <br>  <br>



              <label class="col-lg-2 control-label">vesicule biliare</label>

              <div class="chat-txt">
                <input type="text" class="form-control" name="cmnt4">
              </div>
              <br>  <br>  <br>


              <label class="col-lg-2 control-label">pancreas</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt5">
</div>
<br>  <br>  <br>


<label class="col-lg-2 control-label">reinsgd</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt6">
</div>
<br>  <br>  <br>

<label class="col-lg-2 control-label">rate</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt7">
</div>
<br>  <br>  <br>


<label class="col-lg-2 control-label">autre</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt8">
</div>
<br>  <br>  <br>

<label class="col-lg-2 control-label">conclusion</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt9">
</div>

              <div class="btn-group hidden-sm hidden-xs">
                </div>
              <button class="btn btn-theme">Ajouter</button>
              </form>
              <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
             
<h3>Ordonnance</h3>
              
            </div>
            <br>
            <form action="" method="post">
            <label class="col-lg-2 control-label">med1</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt10">
</div>
<br>  <br>  <br>



<label class="col-lg-2 control-label">med2</label>

<div class="chat-txt">
  <input type="text" class="form-control" name="cmnt11">
</div>
<br>  <br>  <br>


<label class="col-lg-2 control-label">med3</label>

<div class="chat-txt">
<input type="text" class="form-control" name="cmnt12">
</div>
<br>  <br>  <br>


<label class="col-lg-2 control-label">med4</label>

<div class="chat-txt">
<input type="text" class="form-control" name="cmnt13">
</div>
<br>  <br>  <br>

<label class="col-lg-2 control-label">med5</label>

<div class="chat-txt">
<input type="text" class="form-control" name="cmnt14">
</div>

<br>  <br>  <br>

<label class="col-lg-2 control-label">med6</label>

<div class="chat-txt">
<input type="text" class="form-control" name="cmnt15">
</div>
              <button class="btn btn-theme">Ajouter</button>
              </form>

<div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Lettre de liaison</h3>
              
            </div>
            <br>
            <form action="" method="post">
              <div class="chat-txt">

              <label class="col-lg-2 control-label">nom du medcin</label>

<div class="chat-txt">
<input type="text" class="form-control" name="cmnt16">
</div>

<br>  <br>  <br>
                

<label class="col-lg-2 control-label">prenom du medcin</label>

<div class="chat-txt">
<input type="text" class="form-control" name="cmnt18">
</div>

<br>  <br>  <br>


                <textarea id="cmnt17" name="cmnt17"
          rows="10" cols="84">

</textarea>
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                </div>
              <button class="btn btn-theme">Ajouter</button>
              </form>

<?php } ?>

              <?php 

	
 
  //}}?>
          </aside>
          
        </div>
      </section>  
     
    <!-- /MAIN CONTENT -->
    <!--main content end-->
   
  
    <footer class="site-footer">
      <div class="text-center">
        
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
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
