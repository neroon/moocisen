<?php
    session_start();
    include '../includes/connect.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description">
    <meta name="author" content="">

    <title>Mooc Isen</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/logo-nav.css" rel="stylesheet">

    <link href="../assets/css/animate.css" rel="stylesheet">

    <!-- Boite pour rotation -->
    <link href="../assets/css/rotating-card.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />

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
                    <h1>Description du MOOC</h1>
                </div>
            </div>
        </div><br><br>
        <!-- /.container -->
        <div class="container">
            <div class="col-md-12 ">

        <?php
            include '../includes/fonctionsDescription.php'; //Utilisation ici de $_GET['idM']
	
			getInfos();
        ?>

    </div>
	</div>
    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
