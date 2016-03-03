<?php
include "connect.inc.php"; //connexion bdd
$meschoix=$_POST["dataForm"]; //Mes choix
$solutions=$_POST["dataForm2"]; //Les solutions
$idm=$_POST["dataidm"]; //id mooc
$idc=$_POST["dataidc"]; //id chap
$tabide=$_POST["dataide"]; //id exo

/*
$meschoix='["Monsieur Jeson Dupont","Jean Nicolas"]';
$solutions='["Olivier Garnier,Olivier SCHULTZ,Victor Gerard,PERRICHON Guillaume",""]';
*/
//var_dump($saisie);
$meschoix=str_replace('"',"",$meschoix);
$solutions=str_replace('"',"",$solutions);
$solutions=str_replace(',]',"]",$solutions);



function insertFaitToBDD($id_user,$score){
	try { 
		$requete_prepare= $bdd->prepare("INSERT INTO faire(score,id_user,id_exercice) VALUES('$score', '$id_user', '$valPseudo')"); // on prépare notre requête
		$requete_prepare->execute();
		var_dump($requete_prepare);
		echo "->OK insertUsertoBDD";

	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}

}

//echo 'wizard ajax';
//echo 'wizard_ajax.php';
//$callback = $meschoix."<br>".$solutions;
//echo $callback;
//echo json_encode($callback);
/*
if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))){
	//ok session
	$id_user=$_SESSION['id_user'];
	$score = 100;
	insertFaitToBDD($id_user,$score);
}
*/


if($meschoix == $solutions){
	echo 'CORRECT <br> les réponses sont :'.$solutions."<br><br>info débug : ".$idm." ".$idc." ".$tabide." ".$solutions;

}else{
	echo 'INCORRECT <br> les réponses sont :'.$solutions."<br><br>info débug ".$idm." ".$idc." ".$tabide." ".$solutions;
}
exit();
?>