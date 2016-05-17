<?php
  session_start();

  if((isset($_SESSION['id_user']))) {
    header ("location: ../connected/catalogue.php");
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
  <title>FAQ & Aide | Mooc Isen</title>    
   
  <!-- favicon.ic o -->
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">

  <!-- Material Design Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="../../styles/material.min.css">

  <!-- Your styles -->
  <link rel="stylesheet" href="../../styles/not-connected/faq.css">
</head>
<body>

  <!-- header -->
  <header class="site-header">
  <div class="aux cf">
    <h2 class="site-header__title">
      <a class="site-header__root-link" href="../../index.php">
        <img class="site-header__wallet-logo" alt="Mooc Isen" src="../../images/header/mooc-logo.png">
      </a>
    </h2>
    <nav class="site-header__main-nav" id="HeaderNav">
      <ul>
        <li class="">
          <a class="nav-link " href="connexion.php">
            Connexion
          </a>
        </li>
        <li>
          <a class="nav-link" href="inscription.php">
            Inscription
          </a>
        </li>
        <li>
          <div class="site-header__cta site-header__cta--desktop">
            <a href="catalogue.php">
              <button id="header-cta" class="mdl-button mdl-button--raised mdl-button--accent mdl-color--teal mdl-js-button mdl-js-ripple-effect">
                Catalogue
              </button>
            </a>
        </li>
      </ul>
    </nav>
    <div class="site-header__cta site-header__cta--mobile">
      <button id="get-app--large" class="mdl-button mdl-button--raised mdl-button--colored mdl-color--teal js-get-app-button mdl-js-button mdl-js-ripple-effect" onclick="location.replace('catalogue.php');">
        Catalogue
      </button>
    </div>
  </header>

  <!-- FAQ -->
  <div class="container">
    <div class="aux">
      <div class="grid page">

          <aside class="grid__item desk--one-third">
            <nav class="sidebar-nav">
              <ul>
                  <li class="js-scroll-spy-link" data-scroll-spy-group="sidebar" data-scroll-spy-target="categorie1">
                    <a href="#categorie1" data-scroll-to="categorie1" data-g-event="TOC" data-g-label="categorie1">Catégorie 1</a>
                  </li>
                  <li class="js-scroll-spy-link" data-scroll-spy-group="sidebar" data-scroll-spy-target="categorie2">
                    <a href="#categorie2" data-scroll-to="categorie2" data-g-event="TOC" data-g-label="categorie2">Catégorie 2</a>
                  </li>
                  <li class="js-scroll-spy-link" data-scroll-spy-group="sidebar" data-scroll-spy-target="categorie3">
                    <a href="#categorie3" data-scroll-to="categorie3" data-g-event="TOC" data-g-label="categorie3">Catégorie 3</a>
                  </li>
              </ul>
            </nav>
          </aside><!--
    --><div class="grid__item desk--two-thirds">
          <h1 class="page-title">Questions fréquement posées</h1>

            <section class="question__section js-scroll-spy-target categorie1" data-scroll-spy-group="sidebar" data-scroll-spy-section="categorie1">
              <a id="categorie1" class="question__anchor"></a>
              <h4 class="faq-section__title">Catégorie 1</h4>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="0:1">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="0:1">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="0:2">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="0:2">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="0:3">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="0:3">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="0:4">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="0:4">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="0:5">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="0:5">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
            </section>

            <section class="question__section js-scroll-spy-target categorie2" data-scroll-spy-group="sidebar" data-scroll-spy-section="categorie2">
              <a id="categorie2" class="question__anchor"></a>
              <h4 class="faq-section__title">Catégorie 2</h4>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="1:1">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="1:1">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="1:2">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="1:2">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="1:3">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="1:3">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="1:4">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="1:4">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="1:5">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="1:5">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
            </section>
              
            <section class="question__section js-scroll-spy-target categorie3" data-scroll-spy-group="sidebar" data-scroll-spy-section="categorie3">
              <a id="categorie3" class="question__anchor"></a>
              <h4 class="faq-section__title">Catégorie 3</h4>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="2:1">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="2:1">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
                
                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="2:2">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="2:2">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="2:3">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="2:3">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="2:4">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="2:4">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div class="question">
                  <div class="question__question control js-toggle" data-toggle-target="2:5">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <span class="question__arrow">
                      <i class="material-icons question__icon">&#xE313;</i>
                    </span>
                  </div>
                  <div class="question__answer" aria-expanded="false" data-toggle-id="2:5">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> 
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
            </section>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section" style="top:30px">
      <img class="site-header__wallet-logo" alt="Mooc Isen" src="../../images/footer/logo-footer.png">
      <ul class="mdl-mega-footer__link-list">
        <li>
          <h4 style="color: #AFAFAF;">Apprendre avec l'ISEN</h4>
        </li>
        <li>
          <a href="https://www.youtube.com/user/isentoulon" target="_blank">
            <img class="site-header__wallet-logo" alt="YouTube" src="../../images/social/youtube.png">
          </a>
          <a href="https://twitter.com/isentoulon?lang=fr" target="_blank">
            <img class="site-header__wallet-logo" alt="Twitter" src="../../images/social/twitter-white.png">
          </a>
          <a href="https://www.facebook.com/ISEN.Toulon" target="_blank">
            <img class="site-header__wallet-logo" alt="Facebook" src="../../images/social/facebook-white.png">
          </a>
          <a href="https://www.instagram.com/isen.fr/" target="_blank">
            <img class="site-header__wallet-logo" alt="Instagram" src="../../images/social/instagram-white.png">
          </a>
          <a href="https://plus.google.com/104791520528769416386/about" target="_blank">
            <img class="site-header__wallet-logo" alt="Google+" src="../../images/social/google-white.png">
          </a>
        </li>
        </br>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading"> Ressources</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="faq.php">Aide & FAQ</a></li>
        <li><a href="catalogue.php">Catalogue</a></li>
        <li><a href="proposerCours.php">Proposer un MOOC</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">MOOC Isen</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="aPropos.php">A propos</a></li>
        <li><a href="actualitees.php">Actualitées</a></li>
        <li><a href="temoignages.php">Témoignages</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Informations</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="contact.php">Contact</a></li>
        <li><a href="legales.php">Légales</a></li>
      </ul>
    </div>
	
  </div>
	
	<div class="mdl-mega-footer__bottom-section">
		<ul class="mdl-mega-footer__link-list">
			<li>
				<a href="legales.php">Politique de confidentialité</a> 
				| 
				<a href="legales.php">Modalités</a> 
			</li>
		</ul>
	</div>

  <!-- Material Design lite -->
  <script src="../../scripts/material.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../../scripts/not-connected/faq.js"></script>

  <script>
    wallet.init('faq');
  </script>

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