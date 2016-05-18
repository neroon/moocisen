<?php
	function exoDragDrop($idMooc,$idChap,$idExo,$bdd,$numeroExo)
	{
		try{
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();

			$lignesChap = $selectChap->fetchAll();
			
			$selectExo = $bdd->prepare("SELECT * FROM exercice WHERE id_chapitre = $idChap");
			$selectExo->execute();
			
			$lignesExo = $selectExo->fetchAll();
			
			$i = 0;
			$selectqcm = $bdd->prepare("SELECT * FROM dragdrop WHERE id_exercice = $idExo");
			$selectqcm->execute();
			
			$lignesQcm = $selectqcm->fetchAll();
			
			for($i = 0; $i < sizeof($lignesQcm) ; $i++)
			{
				$reponse = $lignesQcm[$i]["reponse_dd"];
				
				 echo'<div class="form-group">
					<h2 class="StepTitle center">'.$lignesQcm[$i]["texte"].'</h2><br>';
				echo' </div><br>';
				
				//}
			}
		}
		catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur afficheChapitreExos()";
		}
	}
?>