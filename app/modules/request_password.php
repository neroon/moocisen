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
              <h1>Réinitaliser mot de passe</h1>
              <p></p>
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
                        <form action="../includes/request_reset.php" method="post" id="myLogin">
                           <fieldset class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                           </fieldset><br>
                           <button type="submit" class="btn btn-primary">Envoyer</button><br>
                            <!--<a href="reset_password.php"><button type="button" class="btn btn-default btn-xs  pull-right"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Code déjà reçu</button></a>-->
                           <?php  if(isset($_GET['erreur'])) {
                                echo $_GET['erreur'];
                            } ?>
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

<script src="../scripts/not-connected/mdpOublie.js"></script>

</body>

</html>
