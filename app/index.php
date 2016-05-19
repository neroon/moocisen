<?php
	session_start();

	if((isset($_SESSION['id_user']))) {
		header ("location: modules/connected/catalogue.php");
	}
?>
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
  <title>Accueil | Mooc Isen</title>    
   
  <!-- favicon.ico -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Mooc Isen">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Mooc Isen">
  <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#457871">

  <!-- Color the status bar on mobile devices -->
  <meta name="theme-color" content="#457871">

  <!-- Material Design Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">

  <!-- Material Design Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="styles/material.min.css">

  <!-- Your styles -->
  <link rel="stylesheet" href="styles/not-connected/index.css">
</head>
<body>

  <!-- header -->
  <header class="site-header">
  <div class="aux cf">
    <h2 class="site-header__title">
      <a class="site-header__root-link" href="index.php">
        <img class="site-header__wallet-logo" alt="Mooc Isen" src="images/header/mooc-logo.png">
      </a>
    </h2>
    <nav class="site-header__main-nav" id="HeaderNav">
      <ul>
        <li>
          <a class="nav-link" href="modules/not-connected/connexion.php">
            Connexion
          </a>
        </li>
        <li>
          <a class="nav-link" href="modules/not-connected/inscription.php">
            Inscription
          </a>
        </li>
        <li>
          <div class="site-header__cta site-header__cta--desktop">
            <a href="modules/not-connected/catalogue.php">
              <button id="header-cta" class="mdl-button mdl-button--raised mdl-button--accent mdl-color--teal mdl-js-button mdl-js-ripple-effect">
                Catalogue
              </button>
            </a>
        </li>
      </ul>
    </nav>
    <div class="site-header__cta site-header__cta--mobile">
      <button id="get-app--large" class="mdl-button mdl-button--raised mdl-button--colored mdl-color--teal js-get-app-button mdl-js-button mdl-js-ripple-effect" onclick="location.replace('modules/not-connected/catalogue.php');">
        Catalogue
      </button>
    </div>
  </header>

  <!-- banniere -->
  <div class="hero hero--home">
    <div class="hero__bg-container">
      <div class="hero__bg-container-overlay">
        <!-- <img src="images/allisdigital.png"> -->
        <h1>ALL IS DIGITAL</h1>
        <div class="hero__get-app">
          <a href="modules/not-connected/catalogue.php">
            <button id="get-app--hero__button" class="get-app hero__btn mdl-button mdl-js-button mdl-color--teal mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
              Catalogue
            </button>
          </a>
        </div>
        <a href="modules/not-connected/inscription.php" class="hero__video-btn mdl-button mdl-js-button">
          Inscription
        </a>
      </div>
      <li class="page-scroll">
        <a href="#welcome">
          <button class="hero__fab mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-shadow--4dp">
            <i class="material-icons">&#xE313;</i>
        </button>
        </a>
      </li>

    </div>
  </div>
    <div aria-live="assertive" aria-atomic="true" aria-relevant="text" class="mdl-snackbar mdl-js-snackbar">
          <div class="mdl-snackbar__text"></div>
          <button type="button" class="mdl-snackbar__action"></button>
        </div>

  <!-- section 1 -->
  <section id="welcome" class="section section--welcome section--text-left section--rev section--align-image-bottom">
    <div class="aux">
      <div class="grid grid--bottom">
        <div class="section__content grid__item palm--one-whole lap--one-half desk--one-half">
          <header class="recesection__header" >
            <h2 class="section__title">Bienvenue sur la plateforme MoocISEN</h2>
            <p> La plateforme héberge des MOOCs destinés aux étudiants</p>
            <p>Notre site sera accessible à un grand nombre de personnes que ce soit des élèves ingénieurs, des étudiants en faculté supérieure, des lycéens ou même des entreprises qui souhaitent former leurs employés à de nouvelles technologies.</p>
          </header>
        </div><!--
        --><div class="section__content grid__item palm--one-whole lap--one-half desk--one-half">
          <!-- iframe-responsive.css full css -->
          <div class="videocontainer" > 
            <iframe src="https://www.youtube.com/embed/lX7kYDRIZO4?modestbranding=0&autohide=0&showinfo=1&controls=1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section 2 -->
  <section class="section section--notifications section--grey section--align-image-bottom">
    <div class="aux">
      <div class="grid grid--middle">
        <div class="section__content grid__item palm--one-whole lap--one-half desk--one-half">
          <header class="section__header">
            <h2 class="section__title">Accessible sur mobile<br></h2>
            <p> </p>
          </header>
        </div><!--
        --><div class="section__image grid__item palm--one-whole lap--one-half desk--one-half">
          <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="images/index/notifications-desktop.png" media="(min-width: 769px)">
            <source srcset="images/index/notifications-mobile.png" media="(max-width: 768px)">
            <!--[if IE 9]></video><![endif]-->
            <img srcset="images/index/notifications-desktop.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <!-- section3 -->
  <section class="section section--safety section--rev">
    <div class="aux">
      <div class="grid grid--middle">
        <div class="section__content grid__item palm--one-whole lap--one-half desk--one-half">
          <header class="section__header">
            <h2 class="section__title">MOOC accessible sans compte</h2>
            <p>Inscrition permettra de suivre votre avancement et votre score</p>
            <p>Page admin pour suivre l'avancement de tous les comptes</p>
          </header>
        </div><!--
        --><div class="section__image grid__item palm--one-whole lap--one-half desk--one-half">
          <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="images/index/safety-desktop.png" media="(min-width: 481px)">
            <source srcset="images/index/safety-mobile.png" media="(max-width: 480px)">
            <!--[if IE 9]></video><![endif]-->
            <img srcset="images/index/safety-desktop.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <!-- section4 -->
  <section class="section section--support section--grey">
    <div class="aux">
      <div class="grid">
        <div class="help-item grid__item one-whole lap--one-half desk--one-half">
          <h3>Questions?</h3>
          <p>Visiter le <a href="modules/not-connected/faq.php">FAQs</a>.</p>
        </div><!--
     --><div class="help-item grid__item one-whole lap--one-half desk--one-half">
          <h3>Besoin d'aide?</h3>
          <p>Aller à <a href="modules/not-connected/faq.php">Aide</a>.</p>
        </div>
      </div>
    </div>

  </section>



  <!-- footer -->
  <footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section" style="top:30px">
      <img class="site-header__wallet-logo" alt="Mooc Isen" src="images/footer/logo-footer.png">
      <ul class="mdl-mega-footer__link-list">
        <li>
          <h4>Apprendre avec l'ISEN</h4>
        </li>
        <li>
          <a href="https://www.youtube.com/user/isentoulon" target="_blank">
            <img class="site-header__wallet-logo" alt="YouTube" src="images/social/youtube.png">
          </a>
          <a href="https://twitter.com/isentoulon?lang=fr" target="_blank">
            <img class="site-header__wallet-logo" alt="Twitter" src="images/social/twitter-white.png">
          </a>
          <a href="https://www.facebook.com/ISEN.Toulon" target="_blank">
            <img class="site-header__wallet-logo" alt="Facebook" src="images/social/facebook-white.png">
          </a>
          <a href="https://www.instagram.com/isen.fr/" target="_blank">
            <img class="site-header__wallet-logo" alt="Instagram" src="images/social/instagram-white.png">
          </a>
          <a href="https://plus.google.com/104791520528769416386/about" target="_blank">
            <img class="site-header__wallet-logo" alt="Google+" src="images/social/google-white.png">
          </a>
        </li>
        </br>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading"> Ressources</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="modules/not-connected/faq.php">Aide & FAQ</a></li>
        <li><a href="modules/not-connected/catalogue.php">Catalogue</a></li>
        <li><a href="modules/not-connected/proposerCours.php">Proposer un MOOC</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">MOOC Isen</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="modules/not-connected/aPropos.php">A propos</a></li>
        <li><a href="modules/not-connected/actualitees.php">Actualités</a></li>
        <li><a href="modules/not-connected/temoignages.php">Témoignages</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Informations</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="modules/not-connected/contact.php">Contact</a></li>
        <li><a href="modules/not-connected/legales.php">Légales</a></li>
      </ul>
    </div>

  </div>
  
	<div class="mdl-mega-footer__bottom-section">
		<ul class="mdl-mega-footer__link-list">
			<li>
				<a href="modules/not-connected/legales.php">Politique de confidentialité</a> 
				| 
				<a href="modules/not-connected/legales.php">Modalités</a> 
			</li>
		</ul>
	</div>

  <!-- Material Design lite -->
  <script src="scripts/material.min.js"></script>
  
  <!-- jQuery -->
  <script src="scripts/jquery/jquery.js"></script>

  <!-- Plugin JavaScript -->
  <script src="scripts/jqueryeasing/jquery.easing.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="scripts/not-connected/index.js"></script>
  <script src="scripts/not-connected/scroll-down-button.js"></script>


    <!-- Custom Theme JavaScript -->
  <script src="scripts/catch_error.js"></script>

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