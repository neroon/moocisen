<?php
    session_start();
    include '../includes/connect.inc.php';
    include '../includes/verif_session.php';
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
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico">

    <title>MOOC chapitre </title>

    <!-- Bootstrap core CSS -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="../assets/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="../assets/css/floatexamples.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/progressbar/bootstrap-progressbar-3.3.0.css">

    <script src="../assets/js/jquery.min.js"></script>


    <!-- slide horizontal img et avatar-->
     <link rel="stylesheet" type="text/css" href="../assets/css/horizontal-slide.css">

     <!-- animation full css -->
    <link href="../assets/css/animate.css" rel="stylesheet">


    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../index.php" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>MOOCs</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                     <!--
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="../assets/images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>MOOC</span>
                        </div>
                    </div>
                    -->
                    <!-- /menu prile quick info -->


                    <!-- sidebar menu drawer-->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <br>
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
                                                <li><a href='mooc.php?idM=".$lignesMySub[$i]['id_mooc']."'><span class='glyphicon glyphicon-calendar' aria-hidden='true'></span>  Inscrit = ".$lignesMySub[$i]['date_suivi']."</a>
                                                </li>
                                                <li><a href='mooc.php?idM=".$lignesMySub[$i]['id_mooc']."&idC=0&numC=0'><span class='glyphicon glyphicon-sort-by-attributes' aria-hidden='true'></span>  Avancement = ".$lignesMySub[$i]['avancement']."</a>
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
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-envelope"></i> Tchat <span class="label label-success pull-right">Coming Soon</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
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
                           <?php include '../includes/affichages/affiche_notif_menu.php'; ?>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
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

                                    <form class="form-horizontal form-label-left"  action="../includes/profil_update_user.php" method="post" id="myform1">

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
                                                    $dirname = "../assets/images/profil/";
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

                                    <form class="form-horizontal form-label-left" action="../includes/profil_update_password.php" method="post" id="myform2" novalidate>

                                        <!-- <span class="section">Informations personnelles</span> -->
                                        

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
                                                if($resuTrophy[$i]["type_succes"]=="G"){
                                                    echo'<img src="../assets/images/trophyG2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
                                                }
                                                else if($resuTrophy[$i]["type_succes"]=="S"){
                                                    echo'<img src="../assets/images/trophyS2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
                                                }
                                                else{
                                                     echo'<img src="../assets/images/trophyB2.png" width="128" height="109" class="trophyUnlock" style="margin:auto;display:block">';
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
                                                    <img src="../assets/images/trophyG.png" width="128" height="109" class="trophyLock" style="margin:auto;display:block">
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
                                                <th style="width: 40%">Avancement</th>
                                                <th style="width: 10%">Score</th>
                                                <th style="width: 20%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php // Affichage du tableau récapitulatif pour chaque projet


                                             // Permet d'avoir les renseignements sur les cours suivis

                                                $corseFollow = $bdd->query('SELECT avancement, date_suivi, id_mooc,nom_mooc FROM user NATURAL JOIN suivre NATURAL JOIN MOOC WHERE id_user= "'.$_SESSION['id_user'].'"');
                                                $corseFollow->execute();
                                                $donnees3 = $corseFollow->fetchAll();


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
                                                            <small>.'.$pourcentage.'% Complete</small>
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
                                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Aller </a>
                                                            <a href="#" class="btn btn-success btn-xs"><i class="fa fa-bar-chart"></i> Statistiques </a>
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

    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <!--<script type="text/javascript" src="../assets/js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="../assets/js/gauge/gauge_demo.js"></script>
    -->
    <!-- chart js -->
    <script src="../assets/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../assets/js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="../assets/js/moment.min.js"></script>
    <script type="text/javascript" src="../assets/js/datepicker/daterangepicker.js"></script>

    <script src="../assets/js/custom.js"></script>

    <!-- form validation -->
    <script src="../assets/js/validator/validator.js"></script>

    <!-- Validation -->
    <script src="../assets/js/jqueryvalidate/jquery.validate.min.js"></script>
    <script src="../assets/js/jqueryvalidate/additional-methods.min.js"></script>

    <script type="text/javascript">
// --------------- REGEX --------------------
$.validator.addMethod("usernameRegex", function(value, element) {
  return this.optional(element) || /^[a-z\u00E0-\u00FC_.+-]+$/i.test(value);
});
$.validator.addMethod("mailRegex", function(value, element) {
  return this.optional(element) || /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/i.test(value);
});
    
    // --------------- Login JqueryValidator ---------
    var login = $("#myform1");
    login.validate({
          //prendre le name
          errorElement: 'span',
          errorClass: 'help-block',
          highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass("has-error");
        },
        rules: {
            name: {
              required: true,
              usernameRegex: true,
              minlength: 2,
          },
          surname: {
              required: true,
              usernameRegex: true,
              minlength: 2,
          },
          pseudo : {
              required: true,
              minlength: 2,
          },
          email: {
              required: true,
              mailRegex: true,
              minlength: 3,
          },
          city:{
          required: true,
        },
      },
      messages: {
        email: {
            required: "email required",
        },
        surname : {
            required: "surname required",
        },
        name: {
            required: "name required",
        },
        name: {
            required: "name required",
        },
     }
    });
        // --------------- Login JqueryValidator ---------
    var myform2 = $("#myform2");
    myform2.validate({
          //prendre le name
          errorElement: 'span',
          errorClass: 'help-block',
          highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass("has-error");
        },
        rules: {
          oldPassword : {
              required: true,
              minlength: 4,
          },
          newPassword: {
              required: true,
              minlength: 4,
          },
      },
      messages: {
        oldPassword: {
            required: "Ancien mot de passe required",
        },
        newPassword : {
            required: "Nouveau mot de passe required",
        },
     }
    });
    </script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="../assets/js/flot/date.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="../assets/js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="../assets/js/flot/jquery.flot.resize.js"></script>

    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];
            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });
            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

    <!-- skycons -->
    <script src="../assets/js/skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;
        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
    ];
        //var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->


  <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';
        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);
        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });
        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);
        /* Mis en commenataire car utilisation de jqueryvalidator
        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }
            if (submit)
                this.submit();
            return false;
        });*/
    
    </script>

    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {
            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }
            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>

    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>