<?php
include "connect.inc.php";  /// Connection bdd

//echo "inscription.php";

//ok=1   ko=0
function formValid(){
	$verif = 1;
	if (isset($_POST['surname'])) {
 		echo "}".$_POST['surname'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['name'])) {
	 	echo "}".$_POST['name'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['pseudo'])) {
	 	echo "}".$_POST['pseudo'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['email'])) {
	 	echo "}".$_POST['email'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['password'])) {
	 	echo "}".$_POST['password'];
	 	echo "-->".md5($_POST['password']);
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['selectPays'])) {
	 	echo "}".$_POST['selectPays'];
	 }else{
	 	$verif=0;
	 }

	if($verif==0){
		return 0;
	}else{
		return 1;
	}
}

//Evite d'avoir 2 mail identique en bdd ok=1 ko=0
function emailExist(){
	include "connect.inc.php";
	$verif = 1; //existant par defaut
	$email = $_POST['email'];
	try { 
	$requete_prepare = $bdd->prepare("SELECT * FROM user where email='$email'"); // on prépare notre req
	$requete_prepare->execute();
	$result = $requete_prepare->fetchAll( PDO::FETCH_ASSOC );
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur";
	}

	if (empty($result)){
		$verif = 0;
	}
	return $verif;
}

function insertUsertoBDD(){
 	include "connect.inc.php";
 	$valSurname = $_POST['surname'];
	$valName = $_POST['name'];
	$valPseudo = $_POST['pseudo'];
	$valEmail = $_POST['email'];
	$valPassword = md5($_POST['password']);
	$valPays = $_POST['selectPays'];
	$valJob = $_POST['selectJob'];
	$linkAvatar = '../../assets/images/profil/0user.png';
	try { 
		//$requete_prepare= $bdd->prepare("INSERT INTO user(nom,prenom,pseudo,email,password,pays,grade) VALUES('$valSurname', '$valName', '$valPseudo', '$valEmail', '$valPassword', '$valPays', 1)"); // on prépare notre requête
		$requete_prepare= $bdd->prepare("INSERT INTO user(nom,prenom,pseudo,email,password,pays,grade,avatar) VALUES('$valSurname', '$valName', '$valPseudo', '$valEmail', '$valPassword', '$valPays', 1, '$linkAvatar')"); // on prépare notre requête
		$requete_prepare->execute();
		var_dump($requete_prepare);
		echo "->OK insertUsertoBDD";

	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}
 }

function startSession(){
	include "connect.inc.php";
	$email = $_POST['email'];
	try { 
		$requete_prepare = $bdd->prepare("SELECT * FROM user WHERE email='$email'"); // on prépare notre req
		$requete_prepare->execute();
		$result = $requete_prepare->fetchAll( PDO::FETCH_ASSOC );
		session_start();
			$_SESSION['login'] 		= $result[0]['email'];
			$_SESSION['pseudo'] 	= $result[0]['pseudo'];
			$_SESSION['id_user'] 	= $result[0]['id_user'];
			$_SESSION['email'] 		= $result[0]['email'];
			$_SESSION['pays'] 		= $result[0]['pays'];
			$_SESSION['grade'] 		= $result[0]['grade'];
			$_SESSION['nom'] 		= $result[0]['nom'];
			$_SESSION['prenom'] 	= $result[0]['prenom'];
			$_SESSION['professeur'] = $result[0]['professeur'];
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur";
	}
}

$verifMail = emailExist();
$verif = formValid();
if($verifMail==1){
	echo '<br>Mail déjà present';
	header("Location: ../modules/not-connected/inscription.php?erreur=mail deja present");
}else if($verif==1){
	insertUsertoBDD();
	//Mettre startSession();
	startSession();
	header("Location: ../index.php?succes");
}
else{
	echo '<br>wrong form';
	header("Location: ../modules/not-connected/inscription.php?erreur= erreur formulaire");
}
?>