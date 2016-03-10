<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

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
                    <li class="active"><a href="#requestPwd" data-toggle="tab">Requête pour Réinitaliser mot de passe</a></li>
                  </ul>
                  <hr>
                  <div id="myTabContent" class="tab-content">
                     <div class="tab-pane active in" id="requestPwd">
                        <form action="../includes/update_pwd.php" method="post" id="myLogin">
                           <fieldset class="form-group">
                              <?php if(isset($_GET['id'])){
                                $id=$_GET['id'];
                                echo ('<span class="label label-default pull-right"><span class="glyphicon glyphicon-lock"></span>  '.$id.'</span>');
                                echo ('<input type="hidden" name="id" value="'.$id.'">'); 
                              } 
                              ?>
                              
                              <label for="exampleInputPassword1">Nouveau mot de passe</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                           </fieldset><br>
                           <button type="submit" class="btn btn-primary">Modifier</button><br>
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
