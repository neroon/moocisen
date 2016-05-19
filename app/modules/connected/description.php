<?php
	session_start();
	
	if((!isset($_SESSION['id_user']))) {
		header ("location: ../../index.php");
	}
	
	include '../../includes/connect.inc.php';
	include '../../includes/include_connected.php'; // drawer

	function imgCard($string1){
    $string1 = strtolower($string1);

    //$pos = strpos($string1, $string2); //false = string trouvé dans string
    if(strpos($string1, "physique")!== false){
      $nameImg = 'atom.png';
    }else if(strpos($string1, "cv")!== false){
      $nameImg = 'doc.png';
    }else if(strpos($string1, "shell")!== false){
      $nameImg = 'shell.png';
    }else if(strpos($string1, "PMI")!== false){
      $nameImg = 'diploma.png';
    }else{
      $nameImg = 'other.png';
    }
    return $nameImg;
  }

  function generateCard($bdd){
  $id_mooc;
        $select = $bdd->prepare("SELECT * FROM mooc");
        $select->execute();
        $lignes = $select->fetchAll();
         //echo '+--------';
        if(sizeof($lignes) == 0){
            echo 'Aucun MOOC présent';
        }else{
          for($i = 0; $i<sizeof($lignes); $i++){
              $id_mooc = $lignes[$i]["id_mooc"];
              $select2 = $bdd->prepare("SELECT nom,prenom FROM user INNER JOIN creer ON user.id_user = creer.id_user INNER JOIN mooc ON mooc.id_mooc = creer.id_mooc WHERE creer.id_mooc = $id_mooc");
              $select2->execute();
              $lignes2 = $select2->fetchAll();



               echo '
                 <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card animated zoomIn">
                    <div class="mdl-card__media mdl-color--teal-400" >
                        <img class="article-image" src="../../images/'.imgCard($lignes[$i]["nom_mooc"]).'" border="0" width="120px" alt="" style="margin: 20px;">
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">'.$lignes[$i]["nom_mooc"].'</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        '.$lignes[$i]["matiere"].'
                        '.$lignes[$i]["description"].'
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="description.php?idM='.$lignes[$i]["id_mooc"].'" data-upgraded=",MaterialButton,MaterialRipple">  Description<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                </div>
                ';
            }
                
        }
  }
?>
<!DOCTYPE html>
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
  <title>Description d'un MOOC | Mooc Isen</title>    
   
  <!-- favicon.ico -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="../../manifest.json">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Mooc Isen">
  <link rel="icon" sizes="192x192" href="../../images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Mooc Isen">
  <link rel="apple-touch-icon" href="../../images/touch/apple-touch-icon.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="../../images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#457871">

  <!-- Color the status bar on mobile devices -->
  <meta name="theme-color" content="#457871">

  <!-- Material Design Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">

  <!-- Material Design Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">
  
  <!-- animate -->
  <link rel="stylesheet" href="../../assets/css/animate.css">
	

  <!-- Your styles -->
  <link rel="stylesheet" href="../../styles/connected/description.css">
  
  <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
  </style>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Description d'un MOOC</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Rechercher...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item"><a style="text-decoration: none; color: grey;" href="aPropos.php">A propos</a></li>
            <li class="mdl-menu__item"><a style="text-decoration: none; color: grey;" href="contact.php">Contact</a></li>
			<li class="mdl-menu__item"><a style="text-decoration: none; color: grey;" href="legales.php">Modalités</a></li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

        <?php 
          afficheMyProfilHeader($bdd);//viens de include_connected.php  drawer de gauche
          afficheMyNavLink();//viens de include_connected.php drawer de gauche
        ?>

      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid ">
               <!-- section -->
                <div class="mdl-grid portfolio-max-width">
                    <div class="mdl-cell mdl-cell--2-col">
                       <!-- boite vide -->
                    </div>
                   <div class="mdl-cell mdl-cell--8-col mdl-card mdl-shadow--4dp">
                      <!-- boite -->
                       <?php
                            include '../../includes/fonctionsDescription.php'; //Utilisation ici de $_GET['idM']
                            callGetInfo3MDL();
                        ?>
                       <!--  -->   
                    </div>
                </div>
        </div>
      </main>
    </div>
	
	<!-- Material Design lite -->
	<script src="../../scripts/material.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
    <script src="../../scripts/connected/description.js"></script>
	
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
