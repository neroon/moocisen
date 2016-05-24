<?php
    session_start();
    $passe = 0;
    if(isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];
        $passe=1;
    }else{
        $passe=0;
    }
    $scoreGlobal = 0;
     if(isset($_POST["scoreGlobal"])) {
        $scoreGlobal=$_POST["scoreGlobal"]; //id mooc  
        }
         $id_exercice = 32;


     if($passe == 1){
        include 'connect.inc.php'; //connexion bdd
        try { 
            $requete_prepare= $bdd->prepare("INSERT INTO faire(score,id_user,id_exercice) VALUES('$scoreGlobal', '$id_user', '$id_exercice') ON DUPLICATE KEY UPDATE score='$scoreGlobal',id_user='$id_user',id_exercice='$id_exercice'"); // on prépare notre requête
            $requete_prepare->execute();
            //echo "Votre score est de ".$scoreGlobal;
            //var_dump($requete_prepare);
        //  echo "->Sauvegarde du score<br>";
        } catch (Exception $e) { 
            echo $e->errorMessage();
            echo "->erreur<br>";
        }


     }
    


?>