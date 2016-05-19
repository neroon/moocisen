<?php
    session_start();
	
    include '../../includes/connect.inc.php';
    include '../../includes/verif_session.php';
	
    try { 
        $select3 = $bdd->prepare("SELECT nom,prenom,email,pseudo,pays FROM user WHERE id_user = ".$_SESSION["id_user"]."");
        $select3->execute();
        $lignes3 = $select3->fetchAll();
        $nom = $lignes3[0]["nom"];
        $prenom = $lignes3[0]["prenom"];
        $email = $lignes3[0]["email"];
        $pseudo  = $lignes3[0]["pseudo"];
        $pays =  $lignes3[0]["pays"];
    } catch (Exception $e) { 
        echo $e->errorMessage();
        echo "->erreur";
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
  <title>Profil | Mooc Isen</title>    
   
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
  
  <!-- Bootstrap core CSS -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- font awesome -->
  <link href="../../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- animate -->
  <link href="../../assets/css/animate.min.css" rel="stylesheet">
 
  <!-- Custom styling plus plugins -->
  <link href="../../assets/css/custom.css" rel="stylesheet">
  <link href="../../assets/css/maps/jquery-jvectormap-2.0.1.css" rel="stylesheet">
  <link href="../../assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="../../assets/css/floatexamples.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/progressbar/bootstrap-progressbar-3.3.0.css" rel="stylesheet">

  <!-- slide horizontal img et avatar-->
  <link href="../../assets/css/horizontal-slide.css" rel="stylesheet">
</head>
<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../../index.php" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>MOOCs</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- sidebar menu drawer-->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        </br>
                        <div class="menu_section">
                            <h2>  &nbsp&nbsp<i class='glyphicon glyphicon-sort-by-alphabet' style='color:white'></i> <span style='color:white'>Moocs inscription</span></h2>
                            <ul class="nav side-menu">
                            <?php
                                try{
                                    //Affiche ou l'utilisateur est inscrit
                                    $selectMySub = $bdd->prepare("SELECT * FROM mooc NATURAL JOIN suivre WHERE suivre.id_user = ".$_SESSION["id_user"].""); 

                                    $selectMySub->execute();
                                    $lignesMySub = $selectMySub->fetchAll();
                                    
                                    
                                    for($i=0;$i<count($lignesMySub);$i++){
                                        echo "
                                         <li><a><i class='glyphicon glyphicon-file'></i> ".$lignesMySub[$i]['nom_mooc']." <span class='fa fa-chevron-down'></span></a>
                                            <ul class='nav child_menu' style='display: none'>
                                                <li><a href='../mooc.php?idM=".$lignesMySub[$i]['id_mooc']."'><span class='glyphicon glyphicon-calendar' aria-hidden='true'></span>  Inscrit = ".$lignesMySub[$i]['date_suivi']."</a>
                                                </li>
                                                <li><a href='../mooc.php?idM=".$lignesMySub[$i]['id_mooc']."&idC=0&numC=0'><span class='glyphicon glyphicon-sort-by-attributes' aria-hidden='true'></span>  Avancement = ".$lignesMySub[$i]['avancement']."</a>
                                                </li>
                                            </ul>
                                        </li>";
                                        
                                    }
                                }catch (Exception $e) { 
                                    echo $e->errorMessage();
                                    echo "->erreur mes cours";
                                }
                            ?>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Menu</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-wrench"></i> Paramètres <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="profil.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profil</a>
                                        </li>
                                        <li><a href="catalogue.php"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>  Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
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
											echo '<img src="'.$avatar.'" alt="">';
										}else{
											echo '<img src="../../assets/images/user.png" alt="">';
										}
									?>
									
									 <?php 
									 $short_string=  $_SESSION['email']; //On va afficher juste les 5 premiers pour regler le pb d'affichage sur mobile
									 echo substr($short_string, 0, 10).".."; 
									 ?>
									<span class=" fa fa-angle-down"></span>
									<ul class="dropdown-menu dropdown-usermenu animated fadeIn pull-right">
										<li><a href="profil.php"><i class="fa fa-user pull-right"></i>Profil</a>
										</li>
										<li><a href="../../includes/logout.php"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a>
										</li>
									</ul>
									
								</a>
								<?php  
								//Si pas connecter
								}else{
									echo "<a href='../not-connected/inscription.php' class='user-profile dropdown-toggle'>";
									echo "<img src='../../assets/images/loadpulseX60.gif' alt=''/>";
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
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Mon profil</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Modifier mon profil <small></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="form-horizontal form-label-left"  action="../../includes/profil_update_user.php" method="post" id="myform1">

                                        <!--<span class="section">Informations personnelles</span> -->
                                        <!-- Photo d'avatar -->
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Avatar"> Avatar<span class="required"></span>
                                            </label>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Avatar"> <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                              <ul class="horizontal-slide">
                                                <!-- Genration des images -->
                                                <?php
                                                    $dirname = "../../assets/images/profil/";
                                                    $images = glob($dirname."*.png");
                                                    foreach($images as $image) {
                                                    //echo '<img src="'.$image.'" /><br />';
                                                    echo '<label class="avatars">';
                                                    echo '<input type="radio" name="avatar" value="'.$image.'"/>';
                                                    //echo '<li class="col-md-2"><img class="" width="" src="'.$image.'"/></li>';
                                                    echo '<img class="img-circle" width="80px" src="'.$image.'"/>';
                                                    echo '</label>';
                                                    }
                                                ?>
                                                </ul>
                                            </div>
                                        </div> 

                                        <div class="item form-group"> 
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nom <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" value=<?php echo $nom ?> required="required" type="text">
                                            </div>
                                        </div> 
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="surname">Prénom <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="surname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="surname" value=<?php echo $prenom ?> required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pseudo">Pseudo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="pseudo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="pseudo" value=<?php echo $pseudo ?> required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" placeholder=<?php echo $email ?> required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                         <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Pays <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" id="exampleSelect1" name="selectPays">
                                                  <option value="AF">Afghanistan</option>
                                                  <option value="AX">Åland Islands</option>
                                                  <option value="AL">Albania</option>
                                                  <option value="DZ">Algeria</option>
                                                  <option value="AS">American Samoa</option>
                                                  <option value="AD">Andorra</option>
                                                  <option value="AO">Angola</option>
                                                  <option value="AI">Anguilla</option>
                                                  <option value="AQ">Antarctica</option>
                                                  <option value="AG">Antigua and Barbuda</option>
                                                  <option value="AR">Argentina</option>
                                                  <option value="AM">Armenia</option>
                                                  <option value="AW">Aruba</option>
                                                  <option value="AU">Australia</option>
                                                  <option value="AT">Austria</option>
                                                  <option value="AZ">Azerbaijan</option>
                                                  <option value="BS">Bahamas</option>
                                                  <option value="BH">Bahrain</option>
                                                  <option value="BD">Bangladesh</option>
                                                  <option value="BB">Barbados</option>
                                                  <option value="BY">Belarus</option>
                                                  <option value="BE">Belgium</option>
                                                  <option value="BZ">Belize</option>
                                                  <option value="BJ">Benin</option>
                                                  <option value="BM">Bermuda</option>
                                                  <option value="BT">Bhutan</option>
                                                  <option value="BO">Bolivia, Plurinational State of</option>
                                                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                  <option value="BA">Bosnia and Herzegovina</option>
                                                  <option value="BW">Botswana</option>
                                                  <option value="BV">Bouvet Island</option>
                                                  <option value="BR">Brazil</option>
                                                  <option value="IO">British Indian Ocean Territory</option>
                                                  <option value="BN">Brunei Darussalam</option>
                                                  <option value="BG">Bulgaria</option>
                                                  <option value="BF">Burkina Faso</option>
                                                  <option value="BI">Burundi</option>
                                                  <option value="KH">Cambodia</option>
                                                  <option value="CM">Cameroon</option>
                                                  <option value="CA">Canada</option>
                                                  <option value="CV">Cape Verde</option>
                                                  <option value="KY">Cayman Islands</option>
                                                  <option value="CF">Central African Republic</option>
                                                  <option value="TD">Chad</option>
                                                  <option value="CL">Chile</option>
                                                  <option value="CN">China</option>
                                                  <option value="CX">Christmas Island</option>
                                                  <option value="CC">Cocos (Keeling) Islands</option>
                                                  <option value="CO">Colombia</option>
                                                  <option value="KM">Comoros</option>
                                                  <option value="CG">Congo</option>
                                                  <option value="CD">Congo, the Democratic Republic of the</option>
                                                  <option value="CK">Cook Islands</option>
                                                  <option value="CR">Costa Rica</option>
                                                  <option value="CI">Côte d'Ivoire</option>
                                                  <option value="HR">Croatia</option>
                                                  <option value="CU">Cuba</option>
                                                  <option value="CW">Curaçao</option>
                                                  <option value="CY">Cyprus</option>
                                                  <option value="CZ">Czech Republic</option>
                                                  <option value="DK">Denmark</option>
                                                  <option value="DJ">Djibouti</option>
                                                  <option value="DM">Dominica</option>
                                                  <option value="DO">Dominican Republic</option>
                                                  <option value="EC">Ecuador</option>
                                                  <option value="EG">Egypt</option>
                                                  <option value="SV">El Salvador</option>
                                                  <option value="GQ">Equatorial Guinea</option>
                                                  <option value="ER">Eritrea</option>
                                                  <option value="EE">Estonia</option>
                                                  <option value="ET">Ethiopia</option>
                                                  <option value="FK">Falkland Islands (Malvinas)</option>
                                                  <option value="FO">Faroe Islands</option>
                                                  <option value="FJ">Fiji</option>
                                                  <option value="FI">Finland</option>
                                                  <option value="FR" selected>France</option>
                                                  <option value="GF">French Guiana</option>
                                                  <option value="PF">French Polynesia</option>
                                                  <option value="TF">French Southern Territories</option>
                                                  <option value="GA">Gabon</option>
                                                  <option value="GM">Gambia</option>
                                                  <option value="GE">Georgia</option>
                                                  <option value="DE">Germany</option>
                                                  <option value="GH">Ghana</option>
                                                  <option value="GI">Gibraltar</option>
                                                  <option value="GR">Greece</option>
                                                  <option value="GL">Greenland</option>
                                                  <option value="GD">Grenada</option>
                                                  <option value="GP">Guadeloupe</option>
                                                  <option value="GU">Guam</option>
                                                  <option value="GT">Guatemala</option>
                                                  <option value="GG">Guernsey</option>
                                                  <option value="GN">Guinea</option>
                                                  <option value="GW">Guinea-Bissau</option>
                                                  <option value="GY">Guyana</option>
                                                  <option value="HT">Haiti</option>
                                                  <option value="HM">Heard Island and McDonald Islands</option>
                                                  <option value="VA">Holy See (Vatican City State)</option>
                                                  <option value="HN">Honduras</option>
                                                  <option value="HK">Hong Kong</option>
                                                  <option value="HU">Hungary</option>
                                                  <option value="IS">Iceland</option>
                                                  <option value="IN">India</option>
                                                  <option value="ID">Indonesia</option>
                                                  <option value="IR">Iran, Islamic Republic of</option>
                                                  <option value="IQ">Iraq</option>
                                                  <option value="IE">Ireland</option>
                                                  <option value="IM">Isle of Man</option>
                                                  <option value="IL">Israel</option>
                                                  <option value="IT">Italy</option>
                                                  <option value="JM">Jamaica</option>
                                                  <option value="JP">Japan</option>
                                                  <option value="JE">Jersey</option>
                                                  <option value="JO">Jordan</option>
                                                  <option value="KZ">Kazakhstan</option>
                                                  <option value="KE">Kenya</option>
                                                  <option value="KI">Kiribati</option>
                                                  <option value="KP">Korea, Democratic People's Republic of</option>
                                                  <option value="KR">Korea, Republic of</option>
                                                  <option value="KW">Kuwait</option>
                                                  <option value="KG">Kyrgyzstan</option>
                                                  <option value="LA">Lao People's Democratic Republic</option>
                                                  <option value="LV">Latvia</option>
                                                  <option value="LB">Lebanon</option>
                                                  <option value="LS">Lesotho</option>
                                                  <option value="LR">Liberia</option>
                                                  <option value="LY">Libya</option>
                                                  <option value="LI">Liechtenstein</option>
                                                  <option value="LT">Lithuania</option>
                                                  <option value="LU">Luxembourg</option>
                                                  <option value="MO">Macao</option>
                                                  <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                  <option value="MG">Madagascar</option>
                                                  <option value="MW">Malawi</option>
                                                  <option value="MY">Malaysia</option>
                                                  <option value="MV">Maldives</option>
                                                  <option value="ML">Mali</option>
                                                  <option value="MT">Malta</option>
                                                  <option value="MH">Marshall Islands</option>
                                                  <option value="MQ">Martinique</option>
                                                  <option value="MR">Mauritania</option>
                                                  <option value="MU">Mauritius</option>
                                                  <option value="YT">Mayotte</option>
                                                  <option value="MX">Mexico</option>
                                                  <option value="FM">Micronesia, Federated States of</option>
                                                  <option value="MD">Moldova, Republic of</option>
                                                  <option value="MC">Monaco</option>
                                                  <option value="MN">Mongolia</option>
                                                  <option value="ME">Montenegro</option>
                                                  <option value="MS">Montserrat</option>
                                                  <option value="MA">Morocco</option>
                                                  <option value="MZ">Mozambique</option>
                                                  <option value="MM">Myanmar</option>
                                                  <option value="NA">Namibia</option>
                                                  <option value="NR">Nauru</option>
                                                  <option value="NP">Nepal</option>
                                                  <option value="NL">Netherlands</option>
                                                  <option value="NC">New Caledonia</option>
                                                  <option value="NZ">New Zealand</option>
                                                  <option value="NI">Nicaragua</option>
                                                  <option value="NE">Niger</option>
                                                  <option value="NG">Nigeria</option>
                                                  <option value="NU">Niue</option>
                                                  <option value="NF">Norfolk Island</option>
                                                  <option value="MP">Northern Mariana Islands</option>
                                                  <option value="NO">Norway</option>
                                                  <option value="OM">Oman</option>
                                                  <option value="PK">Pakistan</option>
                                                  <option value="PW">Palau</option>
                                                  <option value="PS">Palestinian Territory, Occupied</option>
                                                  <option value="PA">Panama</option>
                                                  <option value="PG">Papua New Guinea</option>
                                                  <option value="PY">Paraguay</option>
                                                  <option value="PE">Peru</option>
                                                  <option value="PH">Philippines</option>
                                                  <option value="PN">Pitcairn</option>
                                                  <option value="PL">Poland</option>
                                                  <option value="PT">Portugal</option>
                                                  <option value="PR">Puerto Rico</option>
                                                  <option value="QA">Qatar</option>
                                                  <option value="RE">Réunion</option>
                                                  <option value="RO">Romania</option>
                                                  <option value="RU">Russian Federation</option>
                                                  <option value="RW">Rwanda</option>
                                                  <option value="BL">Saint Barthélemy</option>
                                                  <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                  <option value="KN">Saint Kitts and Nevis</option>
                                                  <option value="LC">Saint Lucia</option>
                                                  <option value="MF">Saint Martin (French part)</option>
                                                  <option value="PM">Saint Pierre and Miquelon</option>
                                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                                  <option value="WS">Samoa</option>
                                                  <option value="SM">San Marino</option>
                                                  <option value="ST">Sao Tome and Principe</option>
                                                  <option value="SA">Saudi Arabia</option>
                                                  <option value="SN">Senegal</option>
                                                  <option value="RS">Serbia</option>
                                                  <option value="SC">Seychelles</option>
                                                  <option value="SL">Sierra Leone</option>
                                                  <option value="SG">Singapore</option>
                                                  <option value="SX">Sint Maarten (Dutch part)</option>
                                                  <option value="SK">Slovakia</option>
                                                  <option value="SI">Slovenia</option>
                                                  <option value="SB">Solomon Islands</option>
                                                  <option value="SO">Somalia</option>
                                                  <option value="ZA">South Africa</option>
                                                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                  <option value="SS">South Sudan</option>
                                                  <option value="ES">Spain</option>
                                                  <option value="LK">Sri Lanka</option>
                                                  <option value="SD">Sudan</option>
                                                  <option value="SR">Suriname</option>
                                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                                  <option value="SZ">Swaziland</option>
                                                  <option value="SE">Sweden</option>
                                                  <option value="CH">Switzerland</option>
                                                  <option value="SY">Syrian Arab Republic</option>
                                                  <option value="TW">Taiwan, Province of China</option>
                                                  <option value="TJ">Tajikistan</option>
                                                  <option value="TZ">Tanzania, United Republic of</option>
                                                  <option value="TH">Thailand</option>
                                                  <option value="TL">Timor-Leste</option>
                                                  <option value="TG">Togo</option>
                                                  <option value="TK">Tokelau</option>
                                                  <option value="TO">Tonga</option>
                                                  <option value="TT">Trinidad and Tobago</option>
                                                  <option value="TN">Tunisia</option>
                                                  <option value="TR">Turkey</option>
                                                  <option value="TM">Turkmenistan</option>
                                                  <option value="TC">Turks and Caicos Islands</option>
                                                  <option value="TV">Tuvalu</option>
                                                  <option value="UG">Uganda</option>
                                                  <option value="UA">Ukraine</option>
                                                  <option value="AE">United Arab Emirates</option>
                                                  <option value="GB">United Kingdom</option>
                                                  <option value="US">United States</option>
                                                  <option value="UM">United States Minor Outlying Islands</option>
                                                  <option value="UY">Uruguay</option>
                                                  <option value="UZ">Uzbekistan</option>
                                                  <option value="VU">Vanuatu</option>
                                                  <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                  <option value="VN">Viet Nam</option>
                                                  <option value="VG">Virgin Islands, British</option>
                                                  <option value="VI">Virgin Islands, U.S.</option>
                                                  <option value="WF">Wallis and Futuna</option>
                                                  <option value="EH">Western Sahara</option>
                                                  <option value="YE">Yemen</option>
                                                  <option value="ZM">Zambia</option>
                                                  <option value="ZW">Zimbabwe</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" id="exampleSelect2" name="selectJob">
                                                <option value="Etudiant">Etudiant</option>
                                                <option value="En recherche d'emploi">En recherche d'emploi</option>
                                                <option value="Actif">Actif</option>
                                              </select>
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button id="send" type="submit" class="btn btn-success">Confirmer</button>
                                                <?php  
                                                    //erreur venant du traitement
                                                    if(isset($_GET['erreur'])) {
                                                        echo $_GET['erreur'];
                                                    } 
                                                    if(isset($_GET['ok'])) {
                                                        echo $_GET['ok'];
                                                    } 
                                                ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Modifier mot de passe <small></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal form-label-left" action="../../includes/profil_update_password.php" method="post" id="myform2" novalidate>
                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Ancien mot de passe</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="oldPassword" type="password" name="oldPassword" data-validate-length-range="4" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Nouveau mot de passe</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="newPassword" type="password" name="newPassword" data-validate-length-range="4" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button id="send" type="submit" class="btn btn-success">Confirmer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /fin row -->
                    <?php  // count nombre trophées débloqués et nombre total de trophées

                        $countUnlockTrophy = $bdd->query('SELECT COUNT(id_succes) AS cpt FROM debloquer WHERE id_user= "'.$_SESSION['id_user'].'"');
                        $donnees = $countUnlockTrophy->fetch();
                        $countUnlockTrophy->closeCursor();
                  
                        $countAllTrophy = $bdd->query('SELECT COUNT(id_succes) AS total FROM succes');
                        $donnees1 = $countAllTrophy->fetch();
                        $countAllTrophy->closeCursor();
                    ?>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Mes trophées <small><?php echo $donnees['cpt'].'/'.$donnees1['total'].' succès débloqué(s)';?> </small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <?php // trophées débloqués par l'utilisateur

                                        $trophy = $bdd->prepare('SELECT debloquer.date_obtention ,succes.nom_succes, succes.description_succes, succes.type_succes FROM succes INNER JOIN debloquer ON succes.id_succes = debloquer.id_succes INNER JOIN user ON user.id_user = debloquer.id_user WHERE debloquer.id_user = "'.$_SESSION['id_user'].'"');
                                        $trophy->execute();
                                        $resuTrophy = $trophy->fetchAll();

                                        for($i = 0; $i<sizeof($resuTrophy); $i++){

                                            echo'<div class="col-md-3">';
                                                if($resuTrophy[$i]["type_succes"]=="P"){
                                                    echo'<img src="../../assets/images/trophyP2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
                                                }
                                                else if($resuTrophy[$i]["type_succes"]=="G"){
                                                    echo'<img src="../../assets/images/trophyG2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
                                                }
                                                else if($resuTrophy[$i]["type_succes"]=="S"){
                                                    echo'<img src="../../assets/images/trophyS2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
                                                }
                                                else{
                                                     echo'<img src="../../assets/images/trophyB2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
                                                }
                                                echo'    
                                                    <p class="text-center"><b>'.$resuTrophy[$i]["nom_succes"].'</b></p>
                                                    <p class="text-center">'.$resuTrophy[$i]["description_succes"].'</p>';
                                                     $date = date_create($resuTrophy[$i]["date_obtention"]);
                                                    echo'<p class="text-center">Débloqué le : '.date_format($date, 'd F Y').'</p>
                                                </div>';
                                        } 
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /fin row -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Trophées restants <small><?php echo ($donnees1['total']-$donnees['cpt']).' succès non débloqué(s)';?></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <?php // trophées non débloqués par l'utilisateur

                                        $trophy1 = $bdd->prepare('SELECT * FROM succes WHERE id_succes NOT IN( SELECT id_succes FROM debloquer WHERE id_user= "'.$_SESSION['id_user'].'")');
                                        $trophy1->execute();
                                        $resuTrophy1 = $trophy1->fetchAll();
        
                                         for($i = 0; $i<sizeof($resuTrophy1); $i++){

                                            echo'<div class="col-md-3">
                                                    <img src="../../assets/images/trophyG.png" width="128" height="109" class="trophyLock" style="margin:auto;display:block">
                                                    <p class="text-center"><b>'.$resuTrophy1[$i]["nom_succes"].'</b></p>
                                                    <p class="text-center">'.$resuTrophy1[$i]["description_succes"].'</p> 
                                                </div>';
                                        }
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /fin row -->

                    <?php  // count nombre de cours suivis

                        $countCorseFollow = $bdd->query('SELECT COUNT(id_user) AS cpt2 FROM suivre WHERE id_user= "'.$_SESSION['id_user'].'"');
                        $donnees2 = $countCorseFollow->fetch();
                        $countCorseFollow->closeCursor();
                    ?>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Mes cours <small><?php echo ($donnees2["cpt2"]).' cours suivis';?></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th style="width: 20%">Nom du cours</th>
                                                <th style="width: 30%">Avancement</th>
                                                <th style="width: 10%">Score</th>
                                                <th style="width: 20%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            // Affichage du tableau récapitulatif pour chaque projet


                                             // Permet d'avoir les renseignements sur les cours suivis
                                            try{
                                                $corseFollow = $bdd->query('SELECT avancement, date_suivi, id_mooc,nom_mooc FROM user NATURAL JOIN suivre NATURAL JOIN mooc WHERE id_user= "'.$_SESSION['id_user'].'"');
                                                $corseFollow->execute();
                                                $donnees3 = $corseFollow->fetchAll();
       
                                            }catch(Exception $Excep){
                                                echo "->erreur donnees ";
                                            }

                                                 for($i = 0; $i<sizeof($donnees3); $i++){

                                                    echo'<tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="">'.$donnees3[$i]['nom_mooc'].'</a>
                                                            <br />
                                                            <small>Inscrit le '.$donnees3[$i]["date_suivi"].'</small>
                                                        </td>';


                                                        //Permet de récuperer l'avancement d'un mooc pour l'utilisateur courant

                                                        $avancementMooc = $bdd->query('SELECT avancement  AS avc FROM user INNER JOIN suivre ON user.id_user= suivre.id_user INNER JOIN mooc ON suivre.id_mooc=mooc.id_mooc WHERE user.id_user = "'.$_SESSION["id_user"].'" AND mooc.id_mooc = "'.$donnees3[$i]["id_mooc"].'"');
                                                        $donnees6 = $avancementMooc->fetch();
                                                        $avancementMooc->closeCursor();
                        

                                                        // Permet de récuperer le nombre de chapitre du MOOC

                                                        $nbChapitreMooc = $bdd->query('SELECT nb_chap FROM mooc WHERE id_mooc ="'.$donnees3[$i]["id_mooc"].'"');
                                                        $donnees7 = $nbChapitreMooc->fetch();
                                                        $nbChapitreMooc->closeCursor();


                                                        // Calcul du % d'avancement

                                                        $tab = Array();
                                                        $tab = preg_split('[-]', $donnees6["avc"]);
                                                        $avancement = sizeof($tab)-1;
                                                        $pourcentage = ceil($avancement/ $donnees7["nb_chap"]*100);

                                                        echo'
                                                        <td class="project_progress">
                                                            <div class="progress progress_sm">
                                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$pourcentage.'"></div>
                                                            </div>
                                                            <small>'.$pourcentage.'% Terminé</small>
                                                        </td>';

                                                        //Permet de calculer le score de l'utilisateur courant sur un mooc 

                                                        $scoreMooc = $bdd->query('SELECT sum(score) AS score FROM faire WHERE id_user= "'.$_SESSION["id_user"].'" AND id_exercice IN (SELECT id_exercice FROM mooc INNER JOIN chapitre ON mooc.id_mooc = chapitre.id_mooc INNER JOIN exercice ON chapitre.id_chapitre=exercice.id_chapitre WHERE mooc.id_mooc = "'.$donnees3[$i]["id_mooc"].'")');
                                                        $donnees4 = $scoreMooc->fetch();
                                                        $scoreMooc->closeCursor();

                                                        // Permet de calculer le score maximal possible en fonction des exercices réalisés par l'utilisateur pour ce MOOC

                                                        $scoreTotalMooc = $bdd->query('SELECT sum(valeur_exo) AS total FROM mooc INNER JOIN chapitre ON mooc.id_mooc = chapitre.id_mooc INNER JOIN exercice ON chapitre.id_chapitre=exercice.id_chapitre WHERE mooc.id_mooc = "'.$donnees3[$i]["id_mooc"].'" AND id_exercice IN(SELECT id_exercice FROM faire WHERE id_user="'.$_SESSION["id_user"].'")');
                                                        $donnees5 = $scoreTotalMooc->fetch();
                                                        $scoreTotalMooc->closeCursor();
                                                        
                                                        echo'<td>
                                                            <p><span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
                                                        if($donnees4["score"]==NULL){
                                                            echo'0';
                                                        }
                                                        else{
                                                            echo $donnees4["score"];
                                                        }
                                                        echo'/';
                                                        if($donnees5["total"]==NULL){
                                                            echo'0';
                                                        }
                                                        else{
                                                            echo $donnees5["total"];
                                                        }
                                                        echo'</p>
                                                        </td>
                                                        <td>
                                                           <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Aller </button>
                                                           <button onclick="callGraph(this.name);" type="button" name="'.$donnees3[$i]['id_mooc'].'" class="btn btn-success btn-xs"><i class="fa fa-bar-chart"></i> Statistiques </button>
                                                        </td>
                                                    </tr>';   
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- end project list -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /fin row -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Statistiques<small></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="removechart">
                                        <canvas id="myChart" height="200" width="400" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="../../assets/js/chartjs/Chart.js"></script>
	
    <!-- bootstrap progress js -->
    <script src="../../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
	
    <!-- icheck -->
    <script src="../../assets/js/icheck/icheck.min.js"></script>
	
    <!-- daterangepicker -->
    <script src="../../assets/js/moment.min.js"></script>
    <script src="../../assets/js/datepicker/daterangepicker.js"></script>

    <script src="../../assets/js/custom.js"></script>

    <!-- form validation -->
    <script src="../../assets/js/validator/validator.js"></script>

    <!-- Validation -->
    <script src="../../assets/js/jqueryvalidate/jquery.validate.min.js"></script>
    <script src="../../assets/js/jqueryvalidate/additional-methods.min.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script src="../../assets/js/flot/jquery.flot.js"></script>
    <script src="../../assets/js/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/js/flot/jquery.flot.orderBars.js"></script>
    <script src="../../assets/js/flot/jquery.flot.time.min.js"></script>
    <script src="../../assets/js/flot/date.js"></script>
    <script src="../../assets/js/flot/jquery.flot.spline.js"></script>
    <script src="../../assets/js/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/js/flot/curvedLines.js"></script>
    <script src="../../assets/js/flot/jquery.flot.resize.js"></script>
	
	<!-- Custom JS-->
	<script src="../../scripts/connected/profil.js"></script>

  <!-- Catch error -->
  <script src="../../scripts/catch_error.js"></script>
	
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