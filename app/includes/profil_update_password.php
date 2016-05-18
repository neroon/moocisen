<?php
session_start();

include "../includes/connect.inc.php";  /// Connection bdd


/*
	Modification du mot de passe depuis la page profif.php 
*/


//ok=1   ko=0
function sessionValid(){
	$verif = 1;
	if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user'])))
    {
    	//session ok
    }
    else
    {
    	$verif = 0;
    }
    return $verif;
}

//ok=1   ko=0
function formValid(){
	$verif = 1;
	if (isset($_POST['oldPassword'])) {
 		echo '<br>'.$_POST['oldPassword'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['newPassword'])) {
 		echo '<br>'.$_POST['newPassword'];
	 }else{
	 	$verif=0;
	 }
	
	if($verif==0){
		return 0;
	}else{
		return 1;
	}
}

//Verifie si l id existe et mot de passe
//ok=1   ko=0   mdp pas le meme = 2
function verifId(){
	include "../includes/connect.inc.php";
	$verif = 1;
	$id = $_SESSION['id_user'];
	$oldPassword = $_POST['oldPassword'];
	try { 
	$requete_prepare = $bdd->prepare("SELECT * FROM user WHERE id_user='$id'"); // on prépare notre req
	$requete_prepare->execute();
	$result = $requete_prepare->fetchAll( PDO::FETCH_ASSOC );
	$oldPasswordInBdd=$result[0]['password'];
	var_dump($result);
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur";
	}

	if($result==NULL){
		$verif = 0; //L'id de reset password
	}
	$oldPassword = md5($oldPassword);
	var_dump($oldPasswordInBdd);
	var_dump($oldPassword);
	if($oldPasswordInBdd===$oldPassword){
		$verif = 2;
	}
	return $verif;
}

//Met a jour l id pour le reset du mdp
function updateIdResetPwd(){
 	include "../includes/connect.inc.php";
 	$valPwd = $_POST['newPassword'];
 	$valPwd = md5($valPwd);
 	$id = $_SESSION['id_user'];
	try { 
		$requete_prepare= $bdd->prepare("UPDATE user SET password='$valPwd' WHERE id_user='$id'"); // on prépare notre requête
		$requete_prepare->execute();
		echo "->OK pwd update";
	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}
 }

//Valide que le formulaire
$verif = formValid();
$verifSession = sessionValid();

if($verifSession==1){
	if($verif==1){
		$verifId = verifId();
		if($verifId==0){
			echo "->id n'existe pas";
			header ("location: ../modules/connected/profil.php?erreur=Erreur mdp");
		}else if($verifId==1){
			echo "->mdp ne corresponde pas";
			header ("location: ../modules/connected/profil.php?erreur=mdp non identique");
		}else if($verif==1){
			updateIdResetPwd();
			header ("location: ../modules/connected/profil.php?ok=success");
		}
	}
	else{
		echo '<br>wrong form';
		header ("location: ../modules/connected/profil.php?erreur=Erreur formulaire");
	}
}else{
	echo '<br>aucune session';
	header ("location: ../index.php?erreur=Erreur session");
}
?>