<?php
session_start();

include 'connect.inc.php';  // Connection bdd

if((isset($_POST["data"]))) {
	$idMooc = $_POST["data"];

$titreMooc = $bdd->prepare('SELECT numero, titre,id_chapitre FROM chapitre WHERE id_mooc="'.$idMooc.'" ORDER BY numero');
$titreMooc->execute();
$resuTitreMooc =  $titreMooc->fetchAll();

$scoreUser = array();
$scoreMax = array();
$pourcentage = array();

//Permet de calculer le score de l'utilisateur courant sur un chapitre sur un mooc

for($i=0;$i<sizeof($resuTitreMooc);$i++){
	$scoreMooc = $bdd->query('SELECT sum(score) AS score FROM faire WHERE id_user= "'.$_SESSION["id_user"].'" AND id_exercice IN (SELECT id_exercice FROM mooc INNER JOIN chapitre ON mooc.id_mooc = chapitre.id_mooc INNER JOIN exercice ON "'.$resuTitreMooc[$i]["id_chapitre"].'"=exercice.id_chapitre WHERE mooc.id_mooc = "'.$idMooc.'")');
		$donnees1 = $scoreMooc->fetch();
		$scoreMooc->closeCursor();

		if($donnees1["score"] == NULL){
			$scoreUser[$i] = 0;
		}
		else{
			$scoreUser[$i]= (int)$donnees1["score"];
		}		
}
		
// Permet de calculer le score maximal possible en fonction des exercices réalisés par l'utilisateur pour ce MOOC

for($i=0;$i<sizeof($resuTitreMooc);$i++){
	 $scoreMaxMooc = $bdd->query('SELECT sum(valeur_exo) AS total FROM mooc INNER JOIN chapitre ON mooc.id_mooc = chapitre.id_mooc INNER JOIN exercice ON chapitre.id_chapitre=exercice.id_chapitre WHERE mooc.id_mooc = "'.$idMooc.'" AND chapitre.id_chapitre="'.$resuTitreMooc[$i]["id_chapitre"].'" AND id_exercice IN(SELECT id_exercice FROM faire WHERE id_user= "'.$_SESSION["id_user"].'")');  
		$donnees2 = $scoreMaxMooc->fetch();
		$scoreMaxMooc->closeCursor();

		if($donnees2["total"] == NULL){
			$scoreMax[$i] = 0;
		}
		else{
			$scoreMax[$i]= (int)$donnees2["total"];
		}		
}

for($i=0;$i<sizeof($resuTitreMooc);$i++){
	if($scoreMax[$i]==0){
		$pourcentage[$i]=0;
	}
	else{
		$pourcentage[$i]=(int)($scoreUser[$i]/$scoreMax[$i]*100);
	}
}

// remplir pourcentage 

$all = array();
$all[0] = $resuTitreMooc;
$all[1] = $pourcentage; 

echo json_encode($all);

}else{

}
?>