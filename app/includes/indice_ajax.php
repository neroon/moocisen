<?php
//indice_ajax
session_start();

$dataSoluce=$_POST["dataSoluce"];  //la solution
$dataId=$_POST["dataId"]; //id soluce
//$ide=$_POST["dataide"]; //id exo
//echo $dataSoluce.'+++'.$dataId;

//Insert le score sur l'exercice (score basé sur l'algorithme de levenshtein)
//Remarque : update le score si il est déjà présent
function insertFaitToBDDwithUpdate($score,$id_user,$id_exercice){
	include 'connect.inc.php'; //connexion bdd
	try { 
		$requete_prepare= $bdd->prepare("INSERT INTO faire(score,id_user,id_exercice) VALUES('$score', '$id_user', '$id_exercice') ON DUPLICATE KEY UPDATE score='$score',id_user='$id_user',id_exercice='$id_exercice'"); // on prépare notre requête
		$requete_prepare->execute();
		//var_dump($requete_prepare);
		echo "->Sauvegarde du score<br>";
	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur<br>";
	}
}

if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))){
    //ok session
    $id_user=$_SESSION['id_user'];
    $score=10;
    insertFaitToBDDwithUpdate($score,$id_user,$dataId); //Insertion en BDD
    //echo "passage en bdd";
}else{
    echo '<br>test hors-ligne';
}
?>
