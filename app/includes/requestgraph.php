<?php
session_start();

include 'connect.inc.php';  // Connection bdd

$idMooc = $_POST["data"];
	
$titreMooc = $bdd->prepare('SELECT numero, titre FROM chapitre WHERE id_mooc="'.$idMooc.'" ORDER BY numero');
$titreMooc->execute();
$resuTitreMooc =  $titreMooc->fetchAll();

//Permet de calculer le score de l'utilisateur courant sur un chapitre  sur un mooc 

$scoreMooc = $bdd->query('SELECT sum(score) AS score FROM faire WHERE id_user= "'.$_SESSION["id_user"].'" AND id_exercice IN (SELECT id_exercice FROM mooc INNER JOIN chapitre ON mooc.id_mooc = chapitre.id_mooc INNER JOIN exercice ON chapitre.id_chapitre=exercice.id_chapitre WHERE mooc.id_mooc = "'.$donnees3[$i]["id_mooc"].'")');
$donnees4 = $scoreMooc->fetch();
$scoreMooc->closeCursor();

// Permet de calculer le score maximal possible en fonction des exercices réalisés par l'utilisateur pour ce MOOC

$scoreTotalMooc = $bdd->query('SELECT sum(valeur_exo) AS total FROM mooc INNER JOIN chapitre ON mooc.id_mooc = chapitre.id_mooc INNER JOIN exercice ON chapitre.id_chapitre=exercice.id_chapitre WHERE mooc.id_mooc = "'.$donnees3[$i]["id_mooc"].'" AND id_exercice IN(SELECT id_exercice FROM faire WHERE id_user="'.$_SESSION["id_user"].'")');
$donnees5 = $scoreTotalMooc->fetch();
$scoreTotalMooc->closeCursor();

echo json_encode($resuTitreMooc);

?>