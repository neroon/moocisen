<?php
  session_start();

  if((isset($_SESSION['id_user']))) {
    header ("location: ../connected/catalogue.php");
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
  <title>Inscription | Mooc Isen</title>    
   
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">

  <!-- Material Design Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="../../styles/material.min.css">

  <!-- Your styles -->
  <link rel="stylesheet" href="../../styles/not-connected/inscription.css">
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
        <li>
          <a class="nav-link" href="connexion.php">
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

  <!-- section -->
  <div class="form-box">
    <div class="head">Inscription</div>   
	
    <form action="../../includes/inscription.php" method="post" id="myform">
	
        <main class="mdl-layout__content">
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input type="input" class="mdl-textfield__input" id="exampleInputName" name="surname"/>
            <label class="mdl-textfield__label" for="exampleInputEmail1">Nom</label>
            <span class="mdl-textfield__error">Nom obligatoire</span>
          </div>
        </main>
		
		<main class="mdl-layout__content">
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input type="input" class="mdl-textfield__input" id="exampleInputPrename" name="name"/>
            <label class="mdl-textfield__label" for="exampleInputEmail1">Prénom</label>
            <span class="mdl-textfield__error">Nom obligatoire</span>
          </div>
        </main>
		
		<main class="mdl-layout__content">
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input type="input" class="mdl-textfield__input" id="exampleInputPseudo" name="pseudo"/>
            <label class="mdl-textfield__label" for="exampleInputEmail1">Pseudo</label>
            <span class="mdl-textfield__error">Pseudo obligatoire</span>
          </div>
        </main>
		
        <main class="mdl-layout__content">
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input type="email" class="mdl-textfield__input" id="exampleInputEmail1" name="email"/>
            <label class="mdl-textfield__label" for="exampleInputEmail1">Email</label>
            <span class="mdl-textfield__error">Email incorrecte</span>
          </div>
        </main>

        <main class="mdl-layout__content">
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input type="password" class="mdl-textfield__input" id="exampleInputPassword1" name="password"/>
            <label class="mdl-textfield__label" for="exampleInputPassword1">Mot de passe</label>
            <span class="mdl-textfield__error">Mot de passe requiert</span>
         </div>
        </main>
		
		<fieldset class="form-group">
                              <label for="exampleSelect1">Pays</label><br>
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
                           </fieldset>
	  
		<fieldset class="form-group">
                              <label for="exampleSelect1">Occupation</label><br>
                              <select class="form-control" id="exampleSelect2" name="selectJob">
                                 <option value="Etudiant">Etudiant</option>
                                 <option value="En recherche d'emploi">En recherche d'emploi</option>
                                 <option value="Actif">Actif</option>
                              </select>
                           </fieldset>
		
        <input type="submit" class="btn" value="Créer compte"/>
    </form>
	<p class="text-p">Vous êtes déjà inscrit ? <a href="connexion.php"> Se connecter</a></p>
  </div>

   <div aria-live="assertive" aria-atomic="true" aria-relevant="text" class="mdl-snackbar mdl-js-snackbar">
      <div class="mdl-snackbar__text"></div>
      <button type="button" class="mdl-snackbar__action"></button>
    </div>
  
  </br></br></br></br>
  
  <!-- footer -->
  <footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section" style="top:30px">
      <img class="site-header__wallet-logo" alt="Mooc Isen" src="../../images/footer/logo-footer.png">
      <ul class="mdl-mega-footer__link-list">
        <li>
          <h4>Apprendre avec l'ISEN</h4>
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
        <li><a href="actualitees.php">Actualités</a></li>
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

  <!-- jquery -->
  <script src="../../scripts/jquery/jquery.js"></script>

  <!-- Validation -->
  <script src="../../scripts/jqueryvalidate/jquery.validate.min.js"></script>
  <script src="../../scripts/jqueryvalidate/additional-methods.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../../scripts/not-connected/inscription.js"></script>

  <!-- Custom Theme JavaScript -->
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