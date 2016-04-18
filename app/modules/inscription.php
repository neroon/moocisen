<?php
  session_start();

  if ((isset($_SESSION['id_user']))){
    header ("location: ../index.php");
  }
    else
    {
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../favicon.ico">

  <title>Mooc Isen</title>

  <!-- Bootstrap Core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../assets/css/logo-nav.css" rel="stylesheet">

  <link href="../assets/css/animate.css" rel="stylesheet">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

    </head>

    <body>

        <?php
          include '../includes/affichages/header.php';
        ?>

        <!-- Page Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>Inscription sur MOOCs</h1>
              <p>Avant de pouvoir accéder à vos MOOCs préférés, veuillez remplir ce formulaire</p>
          </div>
      </div>
  </div><br><br>

  <div class="container animated slideInUp">
   <div class="row">
      <div class="span12">
         <div class="" id="loginModal">
            <div class="modal-body">
               <div class="well col-sm-8 col-sm-offset-2">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#login" data-toggle="tab">Connexion</a></li>
                     <li><a href="#create" data-toggle="tab">Inscription</a></li>
                  </ul>
                  <hr>
                  <div id="myTabContent" class="tab-content">
                     <div class="tab-pane active in" id="login">
                        <form action="../includes/login.php" method="post" id="myLogin">
                           <fieldset class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                           </fieldset>
                           <fieldset class="form-group">
                              <label for="exampleInputPassword1">Mot de passe</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe">
                           </fieldset>
                           <button type="submit" class="btn btn-primary">Connexion</button><br>
                           <?php  if(isset($_GET['erreur'])) {
                                echo $_GET['erreur'];
                            } ?>
                        </form>
                        <a href="request_password.php"><button type="button" class="btn btn-default btn-xs  pull-right"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Mot de passe oublié</button></a>
                     </div>
                     <div class="tab-pane fade" id="create">
                        <form action="../includes/inscription.php" method="post" id="myform">
                           <fieldset class="form-group">
                              <label for="exampleInputName">Nom</label>
                              <input type="input" class="form-control" id="exampleInputName" name="surname" placeholder="Nom">
                           </fieldset>
                           <fieldset class="form-group">
                              <label for="exampleInputPrename">Prenom</label>
                              <input type="input" class="form-control" id="exampleInputPrename" name="name" placeholder="Prénom">
                           </fieldset>
                           <fieldset class="form-group">
                              <label for="exampleInputPseudo">Pseudo</label>
                              <input type="input" class="form-control" id="exampleInputPseudo" name="pseudo" placeholder="Pseudonyme">
                           </fieldset>
                           <fieldset class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                           </fieldset>
                           <fieldset class="form-group">
                              <label for="exampleInputPassword1">Mot de passe</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe">
                           </fieldset>
                           <fieldset class="form-group">
                              <label for="exampleSelect1">Pays</label>
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
                              <label for="exampleSelect1">Occupation</label>
                              <select class="form-control" id="exampleSelect2" name="selectJob">
                                 <option value="Etudiant">Etudiant</option>
                                 <option value="En recherche d'emploi">En recherche d'emploi</option>
                                 <option value="Actif">Actif</option>
                              </select>
                           </fieldset>
                           <button type="submit" class="btn btn-primary">Créer compte</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- jQuery -->
<script src="../assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

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


// --------------- Formulaire JqueryValidator ---------
var form = $("#myform");
form.validate({
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
      pseudo: {
          required: true,
          minlength: 2,
      },
      password : {
          required: true,
          minlength: 4,
      },
      city:{
          required: true,
      },
      name: {
          required: true,
          usernameRegex: true,
          minlength: 3,
      },
      email: {
          required: true,
          mailRegex: true,
          minlength: 3,
      },
  },
  messages: {
    username: {
      required: "Username required",
  },
  name: {
      required: "name required",
  },
  password : {
      required: "Password required",
  },
  name: {
      required: "Name required",
  },
  email: {
      required: "Email required",
  },
}
});

// --------------- Login JqueryValidator ---------
var login = $("#myLogin");
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
      password : {
          required: true,
          minlength: 4,
      },
      email: {
          required: true,
          mailRegex: true,
          minlength: 3,
      },
  },
  messages: {
    password : {
        required: "Password required",
    },
    email: {
        required: "Email required",
    },
 }
});

</script>


</body>

</html>
