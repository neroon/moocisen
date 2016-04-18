<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Une plateform pour apprendre gratuitement.">
    <meta name="keywords" content="mooc,isen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta property="og:title" content="Mooc Isen">
    <meta property="og:image" content="">
    <meta property="og:url" content="http://colombies.com/app">
    <meta property="og:description" content="Une plateform pour apprendre gratuitement.">
    <meta property="robots" content="noindex, nofollow">
	<title>Mooc Isen</title>

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
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">
    
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Material Design icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Material Design Lite page styles -->
    <link rel="stylesheet" href="styles/material.min.css">

    <!-- Your styles -->
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Mooc Isen</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only" >
                    <a class="mdl-navigation__link mdl-color--grey-100 mdl-color-text--grey-700 mdl-base" href="">Catalogue</a>
                    <a class="mdl-navigation__link mdl-color--grey-100 mdl-color-text--grey-700 mdl-base" href="">Connexion</a>
                    <a class="mdl-navigation__link mdl-color--grey-100 mdl-color-text--grey-700 mdl-base" href="">Inscription</a>
                </nav>

                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon mdl-layout--small-screen-only">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                  <li class="mdl-menu__item">Catalogue</li>
                  <li class="mdl-menu__item">Connexion</li>
                  <li class="mdl-menu__item">Inscription</li>
                </ul>
            </div>
        </header>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here --></div>
      </main>
    </div>

    <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
            <div class="mdl-logo">Title</div>
            <ul class="mdl-mini-footer__link-list">
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy & Terms</a></li>
            </ul>
        </div>
    </footer>

	<script src="scripts/material.min.js"></script>
    <script src="scripts/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>