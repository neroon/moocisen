<?php
include 'connect.inc.php';  /// Connection bdd

//ok=1   ko=0
function formValid(){
	$verif = 1;
	if (isset($_POST['password'])) {
 		echo '<br>'.$_POST['password'];
	 }else{
	 	$verif=0;
	 }
	 if (isset($_POST['id'])) {
 		echo '<br>'.$_POST['id'];
	 }else{
	 	$verif=0;
	 }
	
	if($verif==0){
		return 0;
	}else{
		return 1;
	}
}

//Verifie si l id de reset_password existe
//ok=1   ko=0
function verifId(){
	include 'connect.inc.php';
	$verif = 1;
	$id = $_POST['id'];
	try { 
	$requete_prepare = $bdd->prepare("SELECT * FROM user WHERE reset_password='$id'"); // on prépare notre req
	$requete_prepare->execute();
	$result = $requete_prepare->fetchAll( PDO::FETCH_ASSOC );
	var_dump($result);
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur";
	}

	if($result==NULL){
		$verif = 0; //L'id de reset password
	}
	return $verif;
}

//Met a jour l id pour le reset du mdp
function updateIdResetPwd(){
 	include 'connect.inc.php';
 	$valPwd = $_POST['password'];
 	$valPwd = md5($valPwd);
 	$id = $_POST['id'];
	try { 
		$requete_prepare= $bdd->prepare("UPDATE user SET password='$valPwd' WHERE reset_password='$id'"); // on prépare notre requête
		$requete_prepare->execute();
		var_dump($requete_prepare);
		echo "->OK pwd update";
		
	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}
 }

 function resetId(){
 	include 'connect.inc.php';
 	$id = $_POST['id'];

	try { 
		$requete_prepare= $bdd->prepare("UPDATE user SET reset_password='0' WHERE reset_password='$id'"); // on prépare notre requête
		$requete_prepare->execute();
		var_dump($requete_prepare);
		echo "->OK reset_password update";
		
	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}
 }

$verif = formValid();
if(verifId()==0){
	//header ("location: ../index.php?erreur=id n'existe pas (Lien déja utilisé)");
	header ("location: ../modules/not-connected/changerMdp.php?erreur=id n'existe pas (Lien déja utilisé)");
	//echo "->id n'existe pas (Lien déja utilisé)";
}else if($verif==1){
	updateIdResetPwd();
	resetId();
	header ("location: ../index.php?ok=mdp reinit success");
}
else{
	header ("location: ../modules/not-connected/changerMdp.php?erreur=Formulaire erreur");
	//header ("location: ../index.php?erreur=formulaire erreur");
}
?>