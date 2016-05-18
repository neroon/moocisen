<?php
include "connect.inc.php";

function formValid(){
	$verif = 1;
	if (isset($_POST['email'])) {
 		echo $_POST['email'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['password'])) {
	 	//echo $_POST['password'];
	 }else{
	 	$verif=0;
	 }

	if($verif==0){
		return 0;
	}else{
		return 1;
	}
}

 function insertUsertoBDD(){
 	include "connect.inc.php";
 	$email = $_POST['email'];
	$valPassword = $_POST['password'];
	$valPassword = md5($valPassword);
	try { 
	$requete_prepare = $bdd->prepare("SELECT * FROM user WHERE email='$email'"); // on prépare notre req
	$requete_prepare->execute();
	$result = $requete_prepare->fetchAll( PDO::FETCH_ASSOC );
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur";
	}
	/*echo '--->'.$result[0]['email'];
	echo '--->'.$valPassword;
	var_dump($result);*/

	if (empty($result)) {
  		header ("location: ../modules/not-connected/connexion.php?erreur=Aucun compte");
	}else if($result[0]['email']==$email && $result[0]['password']==$valPassword){
		session_start();
        $_SESSION['login'] 		= $result[0]['email'];
        $_SESSION['pseudo'] 	= $result[0]['pseudo'];
        $_SESSION['id_user'] 	= $result[0]['id_user'];
        $_SESSION['email'] 		= $result[0]['email'];
        $_SESSION['pays'] 		= $result[0]['pays'];
        $_SESSION['grade'] 		= $result[0]['grade'];
        $_SESSION['professeur'] = $result[0]['professeur'];
        $_SESSION['nom'] 		= $result[0]['nom'];
        $_SESSION['prenom'] 	= $result[0]['prenom'];
        $_SESSION['avatar'] 	= $result[0]['avatar'];

        //------HISTORIQUE DES CONNEXIONS --------
        include "insert_log.php";
        //--------------------------------------

      	header('location: ../modules/connected/catalogue.php');
	}else if($result[0]['email']==$email && $result[0]['password']!=$valPassword){
		header ("location: ../modules/not-connected/connexion.php?erreur=Mot de passe faux");
	}else{
		header ("location: ../modules/not-connected/connexion.php?erreur=Erreur de saisie");
	}
 }

$verif = formValid();
if($verif==1){
	insertUsertoBDD();
}
else{
	echo '<br>wrong form';
}

?>