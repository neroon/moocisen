<?php
 	//session start utilisé dans description.php

$valid = 1;
 if (isset($_GET['idM'])) {
	$idMooc = $_GET['idM'];
	//echo $idMooc;
}else{
	$valid = 0;
	echo'erreur methode GET';
}
 
 
function getInfos()
{
	global $idMooc;
	include 'connect.inc.php';
	try { 
		$select = $bdd->prepare("SELECT * FROM mooc WHERE id_mooc = $idMooc ");
	    $select->execute();
	    $lignes = $select->fetchAll();

		echo'<div class="content col-md-6">
				<div class="main">
					<h3 class="name"> Nom : '.$lignes[0]["nom_mooc"].' </h3>
					<h3 class="name"> Matière : '.$lignes[0]["matiere"].' </h3>
					<h3 class="name text-justify"> Description : '.$lignes[0]["description"].' </h3>
					<h3 class="name"> Prérequis : '.$lignes[0]["prerequis"].' </h3>
					<h3 class="name"> Durée estimée: '.$lignes[0]["duree"].' heures </h3>
					<h3 class="name"> Note : '.$lignes[0]["note"].' / 5 </h3>
				</div>
			</div>
			<div class="content col-md-6">
				<div class="main">
					<div class="videocontainer"> 
                         <iframe src="https://www.youtube.com/embed/lX7kYDRIZO4" frameborder="0" allowfullscreen></iframe>
                    </div>
				</div>
			</div>

			<br>

			
			';

			if ((isset($_SESSION['login'])) && (!empty($_SESSION['login']))){
				echo'
				<div class="col-sm-4 col-sm-offset-4 animated zoomIn">
					<br>
						<div class="">
							<a href="mooc.php?idM='.$idMooc.'&insert='.$idMooc.'"<button name="id" class="btn btn-block btn-md btn-warning">Accéder au cours</button> </a>
						</div>
				</div>';
			}else{
				echo '
				<div class="col-sm-4 col-sm-offset-4 animated zoomIn">
				<br>
					<div class="">
						<a href="mooc.php?idM='.$idMooc.'"<button name="id" class="btn btn-block btn-md btn-info">Accéder au cours</button> </a>
					</div>
				</div>
				';

			}

			
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur getInfos()";
	}

}


function getInfos2()
{
	global $idMooc;
	include 'connect.inc.php';
	try { 
		$select = $bdd->prepare("SELECT * FROM mooc WHERE id_mooc = $idMooc ");
	    $select->execute();
	    $lignes = $select->fetchAll();

		$scope_nom = $lignes[0]["nom_mooc"];
		$scope_description = $lignes[0]["description"];
		$scope_prerequis = $lignes[0]["prerequis"];
		$scope_duree = $lignes[0]["duree"];
		$scope_note = $lignes[0]["note"];
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur getInfos2()";
	}
	
}

if($valid==1){
	getInfos2();
	//echo "okok";
}
?>