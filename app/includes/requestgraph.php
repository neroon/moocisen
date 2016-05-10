<?php

include 'connect.inc.php';  // Connection bdd

$idMooc = $_POST["data"];
//echo $_POST['idmooc'];

$tabName = Array();
	
$titreMooc = $bdd->prepare('SELECT numero, titre FROM chapitre WHERE id_mooc="'.$idMooc.'" ORDER BY numero');
$titreMooc->execute();
$resuTitreMooc =  $titreMooc->fetchAll();
echo $titreMooc;

?>