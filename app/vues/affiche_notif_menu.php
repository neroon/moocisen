<?php
/* Ne pas oublier session_start();
Menu en haut à droite 
A include dans :
 <div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                ICI
            .....

*/


?>


  <li class="">
    <?php  
    if ((isset($_SESSION['email'])) && (!empty($_SESSION['email']))){
    //Si Connecter
    ?>
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="../assets/images/user.png" alt="">
         <?php 
         $short_string=  $_SESSION['email']; //On va afficher juste les 5 premiers pour regler le pb d'affichage sur mobile
         echo substr($short_string, 0, 10).".."; 
         ?>
        <span class=" fa fa-angle-down"></span>
        <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
            <li><a href="profil.php">Profil</a>
            </li>
            <li><a href="../modeles/logout.php"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a>
            </li>
        </ul>
        
    </a>
    <?php  
    //Si pas connecter
    }else{
        echo "<a href='inscription1.php' class='user-profile dropdown-toggle'>";
        echo "<img src='../assets/images/user.png' alt=''/>";
        echo "<span class=' fa fa-angle-down'></span>";
    echo "</a>";
    }
    ?>
    
    
</li>