<?php     
	session_start();
?>
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="../assets/images/logo.png" width="60px" alt="">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../index.php" > Liste des MOOCs</a>
                        </li>                
                                <?php  
                               if ((isset($_SESSION['login'])) && (!empty($_SESSION['login'])))
                                {
                                    echo 
                                    ("
                                    <li>
                                        <a href='profil.php'> <span class='glyphicon glyphicon-user' aria-hidden='true'></span> ".$_SESSION['pseudo']."</a>
                                    </li>
                                    <li>
                                        <a href='../modeles/logout.php'> <span class='glyphicon glyphicon-off' aria-hidden='true'></span> Déconnexion </a> 
                                    </li>
                                    ");
                                }
                                else
                                {
                                    echo 
                                    ("
                                    <li>
                                        <a href='inscription1.php'> <span class='glyphicon glyphicon-log-in' aria-hidden='true'></span> Connexion</a>
                                    </li>
                                    ");
                                }
                                   
                                ?>
                        <li>
                            <a href="../index.php">A Propos</a>
                        </li>
                            
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>