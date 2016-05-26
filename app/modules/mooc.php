<?php
  session_start();
  
  include '../includes/connect.inc.php';
  include '../includes/requeteMooc.php';
  include '../includes/qcm.php';
  include '../includes/dragdrop.php';
    //inscrition au mooc (voir description.php car method get ->fonctionsDescription.php)
    if(isset($_SESSION['login']) && isset($_GET['insert']) && isset($_GET['idM'])){
        $unlockTrophy = $bdd->query('SELECT COUNT(id_user) AS cpt FROM suivre WHERE id_user= "'.$_SESSION['id_user'].'" AND id_mooc="'.$_GET['idM'].'"');
        $donnees = $unlockTrophy->fetch();
        $unlockTrophy->closeCursor();      
       // echo $donnees['cpt'];
        if($donnees['cpt']==0){
            $iduser = $_SESSION['id_user'];
            $idM = $_GET['idM'];
            try { 
                $requete_prepare= $bdd->prepare("INSERT INTO suivre(date_suivi,avancement,id_user,id_mooc) VALUES(current_date, 0,'$iduser', '$idM')"); // on prépare notre requête
                $requete_prepare->execute();
                //echo "->OK inscrition au mooc";
              
            } catch (Exception $e) { 
                echo $e->errorMessage();
                echo "->erreur";
            }
        }else{
           // echo 'deja inscrit';
        }
    }
    /** Function qui insere le succes lors de l'inscription au mooc*/
    function unlockSuccessInscription($bdd){
        if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))  && isset($_GET['idM']))
        {
            //session ok
            $myid=$_SESSION['id_user'];
            $idMooc = $_GET['idM'];
            $nbSucces = 4; // nombre de succes par MOOC
            $id_succes = $idMooc*$nbSucces-($nbSucces-1);
            try { 
                $requete_prepare= $bdd->prepare("INSERT INTO `debloquer` (`date_obtention`, `id_succes`, `id_user`) VALUES (current_date, '$id_succes', '$myid')"); // on prépare notre requête
                $requete_prepare->execute();
            } catch (Exception $e) { 
                //echo $e->errorMessage();
            }
        }
    }

     unlockSuccessInscription($bdd);
  $idMooc;
  if(isset($_GET['idM'])) {
    $idMooc = $_GET['idM']; 
  }else{
    $valid = 0;
    echo'erreur';
  }
?>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
      https://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Une plateforme pour apprendre gratuitement des cours d'ingénieur à l'ISEN.">

  <meta property="og:title" content="Mooc Isen">
  <meta property="og:image" content="">
  <meta property="og:url" content="http://colombies.com/app">
  <meta property="og:description" content="Une plateforme pour apprendre gratuitement des cours d'ingénieur à l'ISEN.">
  <meta property="robots" content="">
  
  <!-- Title -->
  <title>Mooc Isen</title>    
   
  <!-- favicon.ico -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="../manifest.json">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Mooc Isen">
  <link rel="icon" sizes="192x192" href="../images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Mooc Isen">
  <link rel="apple-touch-icon" href="../images/touch/apple-touch-icon.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="../images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#457871">

  <!-- Color the status bar on mobile devices -->
  <meta name="theme-color" content="#457871">

  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- font awesome -->
  <link href="../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- animate -->
  <link href="../assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../assets/css/custom.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="../assets/css/floatexamples.css" rel="stylesheet">

  <!-- iframe -->
  <link href="../assets/css/iframe-responsive.css" rel="stylesheet">
</head>
<body class="nav-md">

    <div class="container body">
    <div class="main_container ">
      <div class="col-md-3 left_col ">
        <div class="left_col mygrid-wrapper-div">
          <div class="navbar nav_title" style="border: 0;">
            <a href="../index.php" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>MOOCs</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="../assets/images/user.png" style="margin: 10px;" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>MOOC,</span>
              <?php
                titreMooc($idMooc,$bdd);
              ?>
            </div>
          </div>
          <!-- /menu prile quick info -->

          </br>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
            <div class="menu_section ">
              <h3>Chapitres</h3>
              <ul class="nav side-menu ">
                <?php
                $valid = 1;
                $idMooc;
                if (isset($_GET['idM'])) {
                  $idMooc = $_GET['idM']; 
                  //requeteMooc.php
                  chapitresplusSousPartie($idMooc,$bdd);              
                  //echo $idMooc;
                }else{
                  $valid = 0;
                  echo'erreur';
                }       
                ?>
            </div>
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-wrench"></i> Paramètres<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="connected/profil.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a>
                    </li>
                    <li><a href="connected/admin.php"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>  Dashboard</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
        </div>
      </div>  

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
              <!-- AFFICHAGE MENU -->
              <li class="">
                <?php  
                if ((isset($_SESSION['email'])) && (!empty($_SESSION['email']))){
                //Si Connecter
                ?>
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <?php 
                    
                    if ((isset($_SESSION['avatar'])) && (!empty($_SESSION['avatar']))){
                      $avatar=$_SESSION['avatar'];
                      $str = str_replace('../', '', $avatar);
                      echo '<img src="../'.$str.'" alt="">';
                    }else{
                      echo '<img src="../assets/images/user.png" alt="">';
                    }
                  ?>
                  
                   <?php 
                   $short_string=  $_SESSION['email']; //On va afficher juste les 5 premiers pour regler le pb d'affichage sur mobile
                   echo substr($short_string, 0, 10).".."; 
                   ?>
                  <span class=" fa fa-angle-down"></span>
                  <ul class="dropdown-menu dropdown-usermenu animated fadeIn pull-right">
                    <li><a href=" connected/profil.php"><i class="fa fa-user pull-right"></i>Profil</a>
                    </li>
                    <li><a href="../includes/logout.php"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a>
                    </li>
                  </ul>
                </a>
                <?php  
                //Si pas connecter
                }else{
                  echo "<a href='not-connected/inscription.php' class='user-profile dropdown-toggle'>";
                  echo "<img src='../assets/images/loadpulseX60.gif' alt=''/>";
                  echo "<span class=' fa fa-angle-down'></span>";
                echo "</a>";
                }
                ?>
              </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <?php
                if(isset($_GET['idC']) && isset($_GET['idM'])) {
                   $idChap = $_GET['idC']; 
                   $idMooc = $_GET['idM'];                    
                   $numChap = $_GET['numC'];                    
                   include '../mooc/mooc'.$idMooc.'/chapitres/chapitre'.$numChap.'.php';
               }
               else if(isset($_GET['idM'])){
                   $idMooc = $_GET['idM'];
                   echo'<h3>Introduction</h3>';
                   include '../mooc/mooc'.$idMooc.'/chapitres/chapitre0.php';
               } 
        ?>

        <div class="row">
        </div>
            </div>
            <!-- /page content -->
        </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
   
    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery-sortable.js"></script>
  
    <!-- jQuery UI DRAG AND DROP-->
    <script src="../assets/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>

    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script src="../assets/js/gauge/gauge.min.js"></script>
  
    <!-- chart js -->
    <script src="../assets/js/chartjs/chart.min.js"></script>
  
    <!-- bootstrap progress js -->
    <script src="../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  
    <!-- icheck -->
    <script src="../assets/js/icheck/icheck.min.js"></script>
  
    <!-- daterangepicker -->
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/datepicker/daterangepicker.js"></script>

    <script src="../assets/js/custom.js"></script>

    <!-- form validation -->
    <script src="../assets/js/validator/validator.js"></script>

    <!-- Validation -->
    <script src="../assets/js/jqueryvalidate/jquery.validate.min.js"></script>
    <script src="../assets/js/jqueryvalidate/additional-methods.min.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script src="../assets/js/flot/jquery.flot.js"></script>
    <script src="../assets/js/flot/jquery.flot.pie.js"></script>
    <script src="../assets/js/flot/jquery.flot.orderBars.js"></script>
    <script src="../assets/js/flot/jquery.flot.time.min.js"></script>
    <script src="../assets/js/flot/date.js"></script>
    <script src="../assets/js/flot/jquery.flot.spline.js"></script>
    <script src="../assets/js/flot/jquery.flot.stack.js"></script>
    <script src="../assets/js/flot/curvedLines.js"></script>
    <script src="../assets/js/flot/jquery.flot.resize.js"></script>
  
  <!-- skycons -->
    <script src="../assets/js/skycons/skycons.js"></script>
  
  <!-- form wizard -->
  <script src="../assets/js/wizard/jquery.smartWizard.js"></script>
  
  <!-- Custom JS -->
    <script src="../scripts/mooc.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-77911480-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>