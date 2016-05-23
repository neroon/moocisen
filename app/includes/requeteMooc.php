<?php
	
	function titreMooc($idMooc,$bdd)
	{
		$selectChap = $bdd->prepare("SELECT * FROM mooc");
		$selectChap->execute();
		$lignesChap = $selectChap->fetchAll();
		
		echo'<h2><a style="text-decoration:none; color:white;" href="../../app/modules/mooc.php?idM='.$idMooc.'">'.$lignesChap[$idMooc-1]["nom_mooc"].'</a></h2>';
		
	}
	
	function creationWizardStep($idMooc,$numChap,$idChap,$bdd) {
		try{
			          
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();
			$lignesChap = $selectChap->fetchAll();
			if(sizeof($lignesChap) == 0){
			echo 'Aucun chapitre présent';
			}
			else{
				$partie = $lignesChap[$numChap-1]["partie"];
				$tabPartie = array();
				$tabPartie = preg_split('[-]', $partie);
					//var_dump($lignesExo);
					echo'<ul class="wizard_steps" style="padding-left: 0px;">';
							for($ipart = 0; $ipart < sizeof($tabPartie) ; $ipart++)
							{
								echo '<li>
								<a style="text-decoration:none; cursor:default;" href="#step-'.($ipart+1).' ">
									<span class="step_no">'.($ipart+1).'</span>
									<span class="step_descr">
									</span>
								</a>
						</li>';
							}
					echo'</ul></li>';
					
					
				$i = 0;
				if ($idMooc !=0  && $numChap !=0)
				{
					for($i = 0; $i < sizeof($tabPartie) ; $i++)
					{
						echo '<div id="step-'.($i+1).'">
						<div class="panel-body" style="display: block;">';
						
						//echo  nombreExoParChapitre($idMooc,$idChap,$bdd);
						$erreur = afficheChapitreExos($idMooc,$idChap,$bdd,$i);	
						if($erreur == -1)
						{
							echo '<h2 class="StepTitle">Exercice en construction</h2>';
						}
						
						echo '</div>
						</div>';
					}
					
				}
				else{
					$valid = 0;
					echo'erreur';
					}
					
			}
		}
		catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur creationWizardStep()";
		}
		
	}
	
	function chapitresplusSousPartie($idMooc,$bdd)
	{
		//var_dump($idMooc);
		$stringAvancement=''; //contient les chapitre fais par un user
		if ((isset($_SESSION['login'])) && (!empty($_SESSION['login']))){
			$user=$_SESSION['id_user'];
			//var_dump($user);
			try { 
		        $select = $bdd->prepare("SELECT * FROM suivre WHERE id_user = '$user' AND id_mooc = '$idMooc'");
		        $select->execute();
		        $lignes = $select->fetchAll();
		        //var_dump($lignes);
		         $stringAvancement = $lignes[0]["avancement"];
		       // echo "avancement -> ".$stringAvancement;
		    } catch (Exception $e) { 
		        echo $e->errorMessage();
		        echo "->erreur<br>";
		    }
		}
		try{
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();
			$lignesChap = $selectChap->fetchAll();
			if(sizeof($lignesChap) == 0){
				echo 'Aucun chapitre présent';
			}
			else
			{
				for($i = 0; $i<sizeof($lignesChap); $i++)
				{
					$id_chap_tiret = '-'.($i+1); //verifie la présence
					//var_dump($stringAvancement);
					//var_dump($id_chap_tiret);
					if (strpos($stringAvancement, $id_chap_tiret) !== false) {
						echo '<li><a style=""  ><i class="fa fa-check-circle"></i>'.$lignesChap[$i]["titre"].'<br><span class="fa fa-chevron-down"></span><br></a>';
						$partie = $lignesChap[$i]["partie"];
						$tabPartie = array();
						$tabPartie = preg_split('[-]', $partie);
							//var_dump($lignesExo);
							 echo' <ul class="nav child_menu" style="display: none">';
									for($ipart = 0; $ipart < sizeof($tabPartie) ; $ipart++)
									{
										echo '<li><a href="../../app/modules/mooc.php?idM='.$idMooc.'&amp;idC='.$lignesChap[$i]["id_chapitre"].
											'&amp;numC='.$lignesChap[$i]["numero"].'"">'.$tabPartie[$ipart].'</a></li>';	
											
								
										
									}
							echo'</ul></li>';
					}else{
						echo '<li><a><i class="fa fa-book"></i>'.$lignesChap[$i]["titre"].'<br><span class="fa fa-chevron-down"></span><br></a>';
						$partie = $lignesChap[$i]["partie"];
						$tabPartie = array();
						$tabPartie = preg_split('[-]', $partie);
							//var_dump($lignesExo);
							 echo' <ul class="nav child_menu" style="display: none">';
									for($ipart = 0; $ipart < sizeof($tabPartie) ; $ipart++)
									{	
										
										echo '<li><a href="../../app/modules/mooc.php?idM='.$idMooc.'&amp;idC='.$lignesChap[$i]["id_chapitre"].
											'&amp;numC='.$lignesChap[$i]["numero"].'"">'.$tabPartie[$ipart].'</a></li>';	
										
										
										
									}
							echo'</ul></li>';
					}
				}
			}
		}
		catch (Exception $e) { 
			echo $e->errorMessage();
  			echo "->erreur chapitresplusSousPartie()";
		}
		
	}
	
	function nomChapitre($idMooc,$bdd,$numChap) 
	{
		try{
			
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();
			$lignesChap = $selectChap->fetchAll();
			
				echo '<h2> '.$lignesChap[$numChap-1]["titre"].' </h2>';
		}
		catch (Exception $e){ 
		echo $e->errorMessage();
  		echo "->erreur idParNumeroChapitre()";
		}
	}
	
	function idParNumeroExo($idMooc,$idChap,$bdd,$numeroExo)
	{
		try{
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();
			$lignesChap = $selectChap->fetchAll();
			
			$selectExo = $bdd->prepare("SELECT * FROM exercice WHERE id_chapitre = $idChap");
			$selectExo->execute();
			
			$lignesExo = $selectExo->fetchAll();
			if(sizeof($lignesExo) != 0 && $numeroExo<sizeof($lignesExo))
			{
				//echo'<div><h3 class="name"> Exercice n°'.$lignesExo[$numeroExo]["numero"].' </h3></div>';
				
				$idExo = $lignesExo[$numeroExo]["id_exercice"];	
				
				if(sizeof($lignesExo) != 0)
				{	
					return $idExo;
				}
			}
			else
			{
				echo 'Aucun exercice présent';
				return -1;
			}
		}
		catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur idParNumeroExo()";
		}
	}
	
	
	function nombreExoParChapitre($idMooc,$idChap,$bdd)
	{
		try{
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();
			$lignesChap = $selectChap->fetchAll();
			
			$selectExo = $bdd->prepare("SELECT * FROM exercice WHERE id_chapitre = $idChap");
			$selectExo->execute();
			
			$lignesExo = $selectExo->fetchAll();
				
			if(sizeof($lignesExo) != 0)
			{	
				return sizeof($lignesExo);
			}
		
			else
			{
				echo 'Aucun exercice présent';
				return -1;
			}
		}
		catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur nombreExoParChapitre()";
		}
	}
	
	function afficheChapitreExos($idMooc,$idChapitre,$bdd,$numeroExercice)
	{
		try{
			if($idChapitre != -1) // -1 signifie que le chapitre n'existe pas
			{	
				$idExercice = idParNumeroExo($idMooc,$idChapitre,$bdd,$numeroExercice); // -1 signifie que l'exercice n'existe pas
				if($idExercice != -1)
				{
					exoQcm($idMooc,$idChapitre,$idExercice,$bdd,$numeroExercice);
				}
				else{
					return -1;
				}
			}
		}
		catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur afficheChapitreExos()";
		}
		
	}
?>