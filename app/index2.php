<!doctype html>
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
	<meta name="description" content="Une plateforme pour apprendre gratuitement des cours de l'ISEN.">

	<meta property="og:title" content="Mooc Isen">
  <meta property="og:image" content="">
  <meta property="og:url" content="http://colombies.com/app">
  <meta property="og:description" content="Une plateforme pour apprendre gratuitement des cours de l'ISEN.">
  <meta property="robots" content="">
	
	<!-- Title -->
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
  <meta name="msapplication-TileColor" content="#FFFFFF">

  <!-- Color the status bar on mobile devices -->
  <meta name="theme-color" content="#FFFFFF">

	<!-- Material Design Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">

  <!-- Material Design Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="styles/material.min.css">

  <!-- Your styles -->
  <link rel="stylesheet" href="styles/not-connected/main.css">
</head>
<body>

  <!-- header -->
  <header class="site-header">
  <div class="aux cf">
    <h2 class="site-header__title">
      <a class="site-header__root-link" href="index2.php">
        <img class="site-header__wallet-logo" alt="Mooc Isen" src="images/mooc-logo.png">
      </a>
    </h2>
    <nav class="site-header__main-nav" id="HeaderNav">
      <ul>
        <li>
          <a class="nav-link" href="">
            Connexion
          </a>
        </li>
        <li>
          <a class="nav-link" href="">
            Inscription
          </a>
        </li>
        <li>
          <div class="site-header__cta site-header__cta--desktop">
            <button id="header-cta" class="mdl-button mdl-button--raised mdl-button--accent mdl-color--teal mdl-js-button mdl-js-ripple-effect">
              Catalogue
            </button>
        </li>
      </ul>
    </nav>
    <div class="site-header__cta site-header__cta--mobile">
      <button id="get-app--large" class="mdl-button mdl-button--raised mdl-button--colored mdl-color--teal js-get-app-button mdl-js-button mdl-js-ripple-effect">
          Catalogue
      </button>
  </header>

  <!-- banniere -->
  <div class="hero hero--home">
    <div class="hero__bg-container">
      <div class="hero__bg-container-overlay">
        <h1>ALL IS<br>DIGITAL</h1>
        <div class="hero__get-app">
          <button id="get-app--hero__button" class="get-app hero__btn mdl-button mdl-js-button mdl-color--teal mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
            Catalogue
          </button>
        </div>
        <a href="https://www.youtube.com/watch?v=lX7kYDRIZO4" data-target-id="youtube-video-container" data-youtube-id="lX7kYDRIZO4" class="hero__video-btn mdl-button mdl-js-button js-video-trigger">
          Watch the Video</a>
      </div>
    </div>
    <div class="video-container">
      <iframe id="youtube-video-container" frameborder="0" allowfullscreen="1" title="Youtube video player" width"100%" height="100%" src="https://www.youtube.com/embed/lX7kYDRIZO4?controls=2&showinfo=0&widget_referrer=https%3A%2F%2Fwww.google.com%2Fwallet%2F&enablejsapi=1&origin=https%3A%2F%2Fwww.google.com" >
      </iframe>
      
        <div class="video-close js-video-close js-toggle" data-toggle-target="HeaderNav">
        <span class="icon icon--video-close"><!-- --></span>
        </div>
      </div>
    <button class="hero__fab mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-shadow--4dp" data-scroll-to="section--welcome" data-g-event="FAB" data-g-action="click" data-g-label="Down to content">
      <i class="material-icons">&#xE313;</i>
    </button>
  </div>

  <script src="scripts/material.min.js"></script>
  <script src="scripts/not-connected/main.js"></script>

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