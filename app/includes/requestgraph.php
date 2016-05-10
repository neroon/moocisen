<?php

include 'connect.inc.php';  // Connection bdd

$idMooc = 1;
$idMooc = $_POST["data"];

//echo $_POST['idmooc'];

//$tabName = new array();
	
$titreMooc = $bdd->prepare('SELECT numero, titre FROM chapitre WHERE id_mooc="'.$idMooc.'" ORDER BY numero');
$titreMooc->execute();
$resuTitreMooc =  $titreMooc->fetchAll();
//var_dump($resuTitreMooc);
//echo $resuTitreMooc;
echo json_encode($resuTitreMooc);

?>