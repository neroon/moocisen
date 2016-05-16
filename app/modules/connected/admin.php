<?php
  session_start();
  include '../../includes/connect.inc.php';
  include '../../includes/include_connected.php'; // drawer


  /**  AFFICHE LE DETAIL D'UNE PERSONNE BASE SUR  URL GET */
  function afficheDetail($bdd){
     if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user'])) && (isset($_GET['id']))){
      $myid =  $_GET['id'];
     try { 

        //$select2 = $bdd->prepare("SELECT count(id_user), ip FROM log WHERE id_user=$myid");
        $select2 = $bdd->prepare("SELECT ip, COUNT(id_user) FROM log WHERE id_user=$myid GROUP BY ip ORDER BY ip");
        $select2->execute();
        $lignes2 = $select2->fetchAll();
        //var_dump($lignes2);
        $ipAndNbCon = " ";
        for($i = 0; $i < sizeof($lignes2) ; $i++){
          $ipAndNbCon = $ipAndNbCon.'<ul class="demo-list-icon mdl-list"><li class="mdl-list__item"><span class="mdl-badge" data-badge="x'.$lignes2[$i][1].'">'.$lignes2[$i][0].'</span></li>';
        }
  
        $select3 = $bdd->prepare("SELECT * from user WHERE id_user=$myid");
        $select3->execute();
        $lignes3 = $select3->fetchAll();
        
        echo '
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title v2 mdl-card--expand mdl-color--blue-400">
                <h2 class="mdl-card__title-text">'.$lignes3[0]["pseudo"].'</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                <ul class="demo-list-icon mdl-list">
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">personn</i>
                    '.$lignes3[0]["nom"].'  '.$lignes3[0]["prenom"].'
                </span>
                  </li>
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">mail</i>
                            '.$lignes3[0]["email"].'
                  </span>
                  </li>

                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">lock</i>
                    ***********
                  </span>
                  </li>

                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">gps_fixed</i>
                            '.$lignes3[0]["pays"].'
                  </span>
                  </li>
                   <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">vpn_lock</i>
                            '. $ipAndNbCon.'
                  </span>
                  </li>

                </ul>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect"></a>
              </div>
            </div>
            </div>
            ';
      } catch (Exception $e) { 
          echo $e->errorMessage();
          echo "->erreur";
      } 
    }else{
      echo '
       <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title v2 mdl-card--expand mdl-color--grey-300">
                <h2 class="mdl-card__title-text">Détails</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Selectionner une personne
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Connexion</a>
              </div>
            </div>
            </div>
            ';
    }

  }



  function afficheHistorique($bdd){
    if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))){
      $myid = $_SESSION['id_user'];
       try { 
          //$select3 = $bdd->prepare("SELECT * FROM log");
          $select3 = $bdd->prepare("select email, ip, connect_time, id_user from log group by id_user");
          $select3->execute();
          $lignes3 = $select3->fetchAll();


          echo '
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop ">
             <ul class="demo-list-icon mdl-list mdl-color--grey-300">
                <li class="mdl-list__item ">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">info</i>
                    Historique des connexions
                  </span>
                </li>
              </ul><div id="" style="overflow-y: scroll; height:500px;">'; //debut scrool
              for($i = 0; $i < sizeof($lignes3); $i++){
              echo '     



              <ul class="demo-list-three mdl-list">
                          <li class="mdl-list__item mdl-list__item--three-line">
                            <span class="mdl-list__item-primary-content">
                              <i class="material-icons mdl-list__item-avatar">person</i>
                              <span>'.$lignes3[$i]["connect_time"].'</span>
                              <span class="mdl-list__item-text-body">
                                '.$lignes3[$i]["ip"].'  '.$lignes3[$i]["email"].'
                              </span>
                            </span>

                            <span class="mdl-list__item-secondary-content">
                              <a class="mdl-list__item-secondary-action mdl-navigation__link" href="?id='.$lignes3[$i]["id_user"].'"><i class="material-icons">star</i></a>
                            </span>
                          </li>
                        </ul>
                        ';
              } //fin for
          echo ' </div> 
            </div>
          </div>';
          
      } catch (Exception $e) { 
          echo $e->errorMessage();
          echo "->erreur";
      }
    }
  }



  function afficheMesInfo($bdd){

    if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))){
      $myid = $_SESSION['id_user'];
     try { 
        //$select3 = $bdd->prepare("SELECT * FROM log");
        $select3 = $bdd->prepare("SELECT * from user WHERE id_user=$myid");
        $select3->execute();
        $lignes3 = $select3->fetchAll();
        
        echo '
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title v3 mdl-card--expand mdl-color--orange-400">
                <h2 class="mdl-card__title-text">'.$lignes3[0]["pseudo"].'</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                <ul class="demo-list-icon mdl-list">
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">personn</i>
                    '.$lignes3[0]["nom"].'  '.$lignes3[0]["prenom"].'
                </span>
                  </li>
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">mail</i>
                            '.$lignes3[0]["email"].'
                  </span>
                  </li>

                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">lock</i>
                    ***********
                  </span>
                  </li>

                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">gps_fixed</i>
                            '.$lignes3[0]["pays"].'
                  </span>
                  </li>

                </ul>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Modifier</a>
              </div>
            </div>
          </div>
            ';
      } catch (Exception $e) { 
          echo $e->errorMessage();
          echo "->erreur";
      } 
    }else{
      echo '
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title v2 mdl-card--expand mdl-color--grey-300">
                <h2 class="mdl-card__title-text">Hors Connexion</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Veuillez vous connecter
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Connexion</a>
              </div>
            </div>
          </div>
            ';
    }

  }




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MoocISEN Admin</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../../favicon.ico">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="../favicon.ico">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="../../styles/connected/admin.css">
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
    <?php
      //afficheHistorique($bdd);

    ?>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Dashboard</span>
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
            <li class="mdl-menu__item">A propos</li>
            <li class="mdl-menu__item">Accueil</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
       <!-- <header class="demo-drawer-header">
          <img src="../images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>-->

          <?php 
          afficheMyProfilHeader($bdd);//viens de include_connected.php  drawer de gauche
          afficheMyNavLink();//viens de include_connected.php drawer de gauche
        ?>


        
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid ">


              <?php 
                afficheMesInfo($bdd);
                afficheHistorique($bdd);
                afficheDetail($bdd);
              ?>
      
          <!--<div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
          </div>-->
          <!-- snackbar -->
           <div aria-live="assertive" aria-atomic="true" aria-relevant="text" class="mdl-snackbar mdl-js-snackbar">
              <div class="mdl-snackbar__text"></div>
              <button type="button" class="mdl-snackbar__action"></button>
          </div>



<!--
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Updates</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Non dolore elit adipisicing ea reprehenderit consectetur culpa.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
              </div>
            </div>
          </div>
-->

        



            <?php 
              
            ?>






        </div>
      </main>
    </div>
      <!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white" />
            <circle cx=0.5 cy=0.5 r=0.40 fill="black" />
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5 />
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
          </g>
        </defs>
      </svg>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	"/>
            </g>
          </g>
        </defs>
      </svg>-->
      <a href="" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Profil</a>
    
     <!-- jQuery -->
    <script src="../../assets/js/jquery.js"></script>


    <!-- chart js -->
    <script src="../../assets/js/chartjs/Chart.js"></script>
    <script src="../../scripts/material.min.js"></script>
     <script>
       //$get avec js
       function $_GET(param) {
          var vars = {};
          window.location.href.replace( location.hash, '' ).replace( 
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
              vars[key] = value !== undefined ? value : '';
            }
          );

          if ( param ) {
            return vars[param] ? vars[param] : null;  
          }
          return vars;
        }
          
       //snackbar
        $(document).ready(function(){
          var deco_var = decodeURI( $_GET('ok'));


          if(deco_var!=='null'){
            setTimeout(function(){
                    var notification = document.querySelector('.mdl-js-snackbar');
                      var data = {
                        message: deco_var,
                        actionHandler: function(event) {},
                        actionText: ' ',
                        timeout: 5000
                      };
                    notification.MaterialSnackbar.showSnackbar(data);
            }, 1000);
          }
            
        });
      </script>



    <script type="text/javascript">
    var ctx = document.getElementById("myChart");



     function callGraph(idmooc){
        //alert(idmooc);
        var ctx = document.getElementById("myChart");
        $.ajax({
                     type: "POST",
                     url: "../includes/requestgraph.php",
                     dataType: 'json',
                     data: { data:idmooc },
                     success: function(data) {
                        alert("success");
                        //console.log(data); // REGARDER DEBUG
                        console.log(data[0][0]["titre"]); // EXEMPLE
                        console.log(data[1][0]); // EXEMPLE
                        var titles = new Array();
                        data[0].forEach(function(elem,index){
                            titles[index] = elem.titre;
                        })

                        var pourcentage = new Array();
                        data[1].forEach(function(elem,index){
                            pourcentage[index] = elem;
                        })

                        //Get context with jQuery - using jQuery's .get() method.
                        $(".removechart").html('<canvas id="myChart" height="200" width="400" ></canvas>');
                        // reinit canvas
                       
                        var ctx = $("#myChart");
                         
                        //This will get the first returned node in the jQuery collection.
                        
                        var myChart = new Chart(ctx, {
                            type: 'radar',
                            data: mydata,
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });

                    } 
                  
                });
    }

    var mydata = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBackgroundColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(255,99,132,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    };


    var myChart = new Chart(ctx, {
        type: 'radar',
        data: mydata,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    </script>


    
  </body>
</html>
