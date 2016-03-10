<?php
    include '../includes/connect.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mooc Isen</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/icheck/flat/blue.css" rel="stylesheet">
    <link href="../assets/css/logo-nav.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/iframe-responsive.css" rel="stylesheet">

    <!-- Boite pour rotation -->
    <link href="../assets/css/rotating-card.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet">

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
                <h1>Présentation</h1>
                <p>Voici une vidéo de présentation de ce notre site</p>
                <!-- iframe-responsive.css full css -->
                <div class="videocontainer"> 
                   <iframe src="https://www.youtube.com/embed/lX7kYDRIZO4" frameborder="0" allowfullscreen></iframe>
               </div>
           </div>
        </div>
       </div><br>

   <!-- Page Content -->
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Bienvenue sur MOOCs</h1>
            <p>Voici des MOOCs destinés aux étudiants </p>
        </div>
    </div>
</div><br>
<!-- /.container -->
<div class="container">
    <div>
        <input class="search form-control" type="search" placeholder=" Rechercher un cours" onkeyup="filter()" />
        <label>
            <input type="radio" class="flat" checked  id="nom" onclick="Chkbox(this.id);filter();"> Nom
        </label>
        <label>
            <input type="radio" class="flat"  id="matiere" onclick="Chkbox(this.id);filter();"> Matière
        </label>
    </div>



    <div class="col-md-12 ">

        <?php

        $id_mooc;
        $select = $bdd->prepare("SELECT * FROM mooc");
        $select->execute();
        $lignes = $select->fetchAll();
        if(sizeof($lignes) == 0){
            echo 'Aucun MOOC présent';
        }
        else{
            for($i = 0; $i<sizeof($lignes); $i++){
                $id_mooc = $lignes[$i]["id_mooc"];
                $select2 = $bdd->prepare("SELECT nom,prenom FROM user INNER JOIN creer ON user.id_user = creer.id_user INNER JOIN mooc ON mooc.id_mooc = creer.id_mooc WHERE creer.id_mooc = $id_mooc");
                $select2->execute();
                $lignes2 = $select2->fetchAll();
                echo '<div class="col-md-4 col-sm-6 animated zoomIn">
                <div class="card-container manual-flip">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb1.jpg">
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/cvr.png">
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">'.$lignes[$i]["nom_mooc"].'</h3>
                                    <p class="profession">ISEN Toulon</p>
                                    <p class="matiere">'.$lignes[$i]["matiere"].'</p>

                                    <a href="description.php?idM='.$lignes[$i]["id_mooc"].'"<button name="id" class="btn btn-block btn-md btn-info">Description du cours</button> </a>

                                </div>
                                <div class="footer">
                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                        <i class="fa fa-mail-forward"></i> Informations
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h3 class="motto">'.$lignes[$i]["nom_mooc"].'</h3>
                            </div> 
                            <div class="content">
                                <div class="main">
                                    <p>
                                        <strong>Description : </strong>
                                        <span class="text-center text-justify">'.$lignes[$i]["description"].'</span><br><br>
                                        <strong>Durée : </strong>
                                        <span class="text-center">'.$lignes[$i]["duree"].' heures</span><br><br>
                                        <strong>Nombre de chapitres : </strong>
                                        <span class="text-center">'.$lignes[$i]["nb_chap"].'</span><br><br>
                                        <strong>Prérequis : </strong>
                                        <span class="text-center">'.$lignes[$i]["prerequis"].'</span><br><br>
                                        <strong>Professeur : </strong>';
                                        for($j=0;$j<sizeof($lignes2);$j++){
                                            echo'<span class="text-center">'.$lignes2[$j]["prenom"].' '.$lignes2[$j]["nom"].'</span><br>';
                                        }
                                        echo'<br><br>
                                        <strong>Matière : </strong>
                                        <span class="text-center">'.$lignes[$i]["note"].'/5</span><br><br>
                                    </p>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                    <i class="fa fa-reply"></i> Retour
                                </button>
                                <div class="social-links text-center">
                                    <a href="http://www.isen.fr/toulon/accueil/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                    <a href="http://www.isen.fr/toulon/accueil/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                    <a href="http://www.isen.fr/toulon/accueil/" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>';
        }
    }
    ?>

</div>
</div>
<br>
<div class="container">
    <div class="well">
        <div id="disqus_thread"></div>
    </div>
</div>
<script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
             */

             var disqus_config = function () {
                //alert(window.location.href);
                this.page.url = window.location.href;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            
            (function() {  // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                
                s.src = '//mooccv.disqus.com/embed.js';
                
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>;</noscript>

        <!-- jQuery -->
        <script src="../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../assets/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            function rotateCard(btn){
                var $card = $(btn).closest('.card-container');
                console.log($card);
                if($card.hasClass('hover')){
                    $card.removeClass('hover');
                } else {
                    $card.addClass('hover');
                }
            }
            function Chkbox(id){
                switch(id){
                    case "nom" :
                    document.getElementById("nom").checked = true;
                    document.getElementById("matiere").checked = false;
                    break;
                    case "matiere" :
                    document.getElementById("nom").checked = false;
                    document.getElementById("matiere").checked = true;
                    break;
                }
            }
            function filter(){
                var chaine = $(".search").val().toLowerCase();
                console.log(chaine);
                if(chaine.length == 0){
                    $(".name").each(function(){
                        $(this).parents(".col-md-4").removeClass("hide").addClass("show");
                    });
                }
                if (chaine.length > 1){
                    if(document.getElementById("nom").checked == true){
                        $(".name").each(function(){

                            var n = $(this).text().toLowerCase().search(chaine);
                            if(n != -1){
                                $(this).parents(".col-md-4").removeClass("hide").addClass("show");
                            }
                            else{
                                $(this).parents(".col-md-4").removeClass("show").addClass("hide");
                                console.log($(this).text().toLowerCase());
                            }
                        });
                    }
                    else{
                        $(".matiere").each(function(){

                            var n = $(this).text().toLowerCase().search(chaine);
                            if(n != -1){
                                $(this).parents(".col-md-4").removeClass("hide").addClass("show");
                            }
                            else{
                                $(this).parents(".col-md-4").removeClass("show").addClass("hide");
                                console.log($(this).text().toLowerCase());
                            }
                        });
                    }
                }
            }
            $('input').focusin(function(){
                $(this).removeAttr('placeholder');
            });
            $('input').focusout(function(){
                $(this).attr('placeholder','Rechercher un cours');
            });

        </script>


    </body>

    </html>