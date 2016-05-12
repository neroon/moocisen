<?php

	function exoQcm($idMooc,$idChap,$idExo,$bdd,$numeroExo)
	{
		try{
			$selectChap = $bdd->prepare("SELECT * FROM chapitre WHERE id_mooc = $idMooc");
			$selectChap->execute();

			$lignesChap = $selectChap->fetchAll();
			
			$selectExo = $bdd->prepare("SELECT * FROM exercice WHERE id_chapitre = $idChap");
			$selectExo->execute();
			
			$lignesExo = $selectExo->fetchAll();
			
			$i = 0;
			$selectqcm = $bdd->prepare("SELECT * FROM qcm WHERE id_exercice = $idExo");
			$selectqcm->execute();
			
			$lignesQcm = $selectqcm->fetchAll();

			//Reponse du qcm
			$tabHint = array();
			$tabSolution = array();
			$numCaseTab=0; 
			//echo "size".$lignesQcm;
			//var_dump($lignesQcm);
			for($i = 0; $i < sizeof($lignesQcm) ; $i++)
			{
				$solution = $lignesQcm[$i]["solution"];
				$tabHint = preg_split('[-]', $solution);

				for($itab = 0; $itab < sizeof($tabHint) ; $itab++)
				{
					//var_dump($tabHint);
					//echo sizeof($tabHint);
					//echo "**".$tabHint[$itab];
					//print_r("**".$tabHint[$itab]);
					//obligatoire si plusieurs reponse de meme nom
					$lowercase = strtolower($tabHint[$itab]);
					if($lowercase == 'oui'){
						$tabSolution[$numCaseTab]=$tabHint[$itab].$i; //rajoute $i si doublon
						//print_r("+*".$tabSolution[$numCaseTab]);
					}else if($lowercase == 'non'){
						$tabSolution[$numCaseTab]=$tabHint[$itab].$i; //rajoute $i si doublon
						//print_r("-*".$tabSolution[$numCaseTab]);
					}
					else{
						$tabSolution[$numCaseTab]=$tabHint[$itab];
						//print_r("-*".$tabSolution[$numCaseTab]);
					}
						
					$numCaseTab++;
				}
			}
			//var_dump($tabSolution);
			//Type hidden qui correpond au reponse pour le qcm
			//$temp = $tabSolution;
			$temp = preg_replace("/\s+/","", $tabSolution );
			//print_r($temp);

			//$tabSolution=implode(",",$tabSolution);
			//$tabSolution=json_encode($tabSolution);
			//echo 'tab réponse='.$tabSolution;
			//Réponse présent
			//echo "<input type='hidden' class='soluce' name='zyx' value='".implode(",", $tabSolution)."'/>";
			echo '<input type="input" class="soluce" name="zyx" value="'.implode(",", $temp).'"/>';
			//echo "<input type='hidden' id='idexo' name='nameexo' value='".$tabSolution."'/>";
			//echo '<div id="solucebox"></div>'; //affichage sur show
			/*if(isset($idMooc) && isset($_GET['idC'])){
				echo "<input type='hidden' id='idm' name='idm' value='".$tabSolution."'/>";
			}*/
			echo "<input type='hidden' id='idm' name='idm' value='".$idMooc."'/>";
			echo "<input type='hidden' id='idc' name='idc' value='".$idChap."'/>";
			echo "<input type='hidden' id='ide' name='ide' value='".$idExo."'/>";
			//echo "<input type='hidden' id='indice' class='".$idExo."' name='indice' value='".htmlspecialchars(stripslashes($lignesQcm[0]["indice_qcm"]))."'/>";//indice
			echo '<input type="hidden" id="indice" class="'.$idExo.'" name="indice" value="' . htmlspecialchars(stripslashes($lignesQcm[0]["indice_qcm"])) . '" />';

			//affichage du QCM
				$ouinon = 0;
			for($i = 0; $i < sizeof($lignesQcm) ; $i++)
			{
				$reponse = $lignesQcm[$i]["reponse_qcm"];
				$tab = array();
				$tab = preg_split('[-]', $reponse);
				//var_dump($lignesExo);

				
				
				
				 echo'<div class="form-group">
					<h2 class="StepTitle center">'.$lignesQcm[$i]["question"].'</h2><br>';
				
								for($itab = 0; $itab < sizeof($tab) ; $itab++)
								{ 
									if( strtolower($tab[$itab]) == "oui" ||  strtolower($tab[$itab]) == "non")
									{
										if( strtolower($tab[$itab]) == "oui")
										{
										echo'<div class="ck-button">
											   <label>
												  <input type="checkbox" name="'.$tab[$itab].$i.'" value=""><span>'.$tab[$itab].'</span> 
											   </label>
											</div>';
										}
										else if( strtolower($tab[$itab]) == "non")
										{
										echo'<div class="ck-button">
											   <label>
												  <input type="checkbox"name="'.$tab[$itab].$i.'" value=""><span>'.$tab[$itab].'</span> 
											   </label>
											</div><br>';
										}
									}
									else{
										echo '<div class="checkbox center">
											<label class="hover">
												<div class="icheckbox_flat-green checked hover" style="position: relative;"><input type="checkbox" name="'.preg_replace("/\s+/","",$tab[$itab]).'" class="flat"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
												'.$tab[$itab].'<br>
											</label>
										</div>';
										//echo 'sok';
									}										
								}

				echo' </div><br>';
				echo '<button type="button" class="myindice btn btn-round btn-success btn-xs" value="'.$idExo.'">Indice</button>'; // indice

			
				
				//}
			}


		}
		catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur afficheChapitreExos()";
		}
		
	}

?>