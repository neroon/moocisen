<?php
session_start();
include "connect.inc.php";  /// Connection bdd

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
	if (isset($_POST['surname'])) {
 		echo $_POST['surname'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['name'])) {
	 	echo $_POST['name'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['pseudo'])) {
	 	echo $_POST['pseudo'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['email'])) {
	 	echo $_POST['email'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['selectPays'])) {
	 	echo $_POST['selectPays'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['selectJob'])) {
	 	echo $_POST['selectJob'];
	 }else{
	 	$verif=0;
	 }

	if($verif==0){
		return 0;
	}else{
		return 1;
	}
}


//Met a jour l id pour le reset du mdp
function updateUser(){
 	include "connect.inc.php";
 	$id = $_SESSION['id_user'];
 	$name = $_POST['name'];
 	$surname = $_POST['surname'];
 	$pseudo = $_POST['pseudo'];
 	$pays = $_POST['selectPays'];
 	$email = $_POST['email'];
 	$selectJob = $_POST['selectJob'];
 	$avatar = $_POST['avatar'];
 	$_SESSION['avatar'] 	= $_POST['avatar'];
	try { 
		$requete_prepare= $bdd->prepare("UPDATE user SET nom='$name', prenom='$surname', pseudo='$pseudo', email='$email', pays='$pays', statut='$selectJob', avatar='$avatar' WHERE id_user='$id'"); // on prépare notre requête
		$requete_prepare->execute();
		echo "->OK user update";
	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}
 }

//Valide que le formulaire
$verif = formValid();
$verifSession = sessionValid();
if($verifSession ==1){
	if($verif==1){
		updateUser();
		header ("location: ../modules/connected/profil.php?ok=success");
	}
	else{
		echo '<br>wrong form';
		header ("location: ../modules/connected/profil.php?erreur=Erreur formulaire");
	}
}else{
	echo '<br>aucune session';
	header ("location: ../modules/connected/profil.php?erreur=Erreur session");
}
?>