 <?php
  function afficheMyProfilHeader($bdd){

     if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))){
      $myid = $_SESSION['id_user'];
      try { 
        //$select3 = $bdd->prepare("SELECT * FROM log");
        $select3 = $bdd->prepare("SELECT * from user WHERE id_user=$myid");
        $select3->execute();
        $lignes3 = $select3->fetchAll();
        
        echo '
        <header class="demo-drawer-header">
          <img src="'.$lignes3[0]["avatar"].'" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>'.$lignes3[0]["email"].'</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                 <a class="mdl-navigation__link" href="../../includes/logout.php"><li class="mdl-menu__item">Se deconnecter<i class="material-icons">exit_to_app</i></li></a>
            </ul>
          </div>
        </header>
            ';
      } catch (Exception $e) { 
          echo $e->errorMessage();
          echo "->erreur";
      } 
    }else{
      echo '
        <header class="demo-drawer-header">
          <img src="../../images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>Hors ligne</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
    
          </div>
        </header>
            ';
    }
  }
  
  function afficheMyNavLink(){

      if(($_SESSION['professeur'])==1) {
        
    echo '
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="profil.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Profil</a>
          <a class="mdl-navigation__link" href="admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Admin</a>
          <a class="mdl-navigation__link" href="catalogue.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book</i>Catalogue</a>
          <a class="mdl-navigation__link" href="actualitees.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Actualitées</a>
          <a class="mdl-navigation__link" href="temoignages.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Témoignages</a>
          <a class="mdl-navigation__link" href="proposerCours.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Proposer un MOOC</a>

              <div class="mdl-layout-spacer"></div>
              <a class="mdl-navigation__link" href="faq.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Aide & FAQ</a>
            </nav>';
      }else{

          echo '
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="profil.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Profil</a>
          <a class="mdl-navigation__link" href="catalogue.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book</i>Catalogue</a>
          <a class="mdl-navigation__link" href="actualitees.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Actualitées</a>
          <a class="mdl-navigation__link" href="temoignages.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Témoignages</a>
          <a class="mdl-navigation__link" href="proposerCours.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Proposer un MOOC</a>

              <div class="mdl-layout-spacer"></div>
              <a class="mdl-navigation__link" href="faq.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Aide & FAQ</a>
            </nav>';

      }
  


  }
?>