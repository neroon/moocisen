<?php
session_start();

$meschoix=$_POST["dataForm"]; //Mes choix
$solutions=$_POST["dataForm2"]; //Les solutions
$idm=$_POST["dataidm"]; //id mooc
$idc=$_POST["dataidc"]; //id chap
$ide=$_POST["dataide"]; //id exo
$tabide=$_POST["datatabide"]; //id tab des partie exo
$malus=$_POST["datamalus"]; //id tab des partie exo

/*
$meschoix='["Monsieur Jeson Dupont","Jean Nicolas"]';
$solutions='["Olivier Garnier,Olivier SCHULTZ,Victor Gerard,PERRICHON Guillaume",""]';
*/
//var_dump($saisie);
/*$meschoix=str_replace('"',"",$meschoix);
$solutions=str_replace('"',"",$solutions);
$solutions=str_replace(',]',"]",$solutions);
*/

//Insert le score sur l'exercice (score basé sur l'algorithme de levenshtein)
//Remarque : une fois le score rentré impossible de réécrire dessus avec cette fonction
function insertFaitToBDD($score,$id_user,$id_exercice){
	include 'connect.inc.php'; //connexion bdd
	try { 
		$requete_prepare= $bdd->prepare("INSERT INTO faire(score,id_user,id_exercice) VALUES('$score', '$id_user', '$id_exercice')"); // on prépare notre requête
		$requete_prepare->execute();
		//var_dump($requete_prepare);
		echo "->Sauvegarde du score<br>";

	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur<br>";
	}
}

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

function updateSuivreChap($id_user,$id_chap,$id_mooc){
    include 'connect.inc.php'; //connexion bdd
    try { 
        $select = $bdd->prepare("SELECT * FROM suivre WHERE id_user = '$id_user' AND id_mooc = '$id_mooc'");
        $select->execute();
        $lignes = $select->fetchAll();
        //var_dump($lignes);
        $stringAvancement = $lignes[0]["avancement"];
       // echo "avancement -> ".$stringAvancement;
    } catch (Exception $e) { 
        echo $e->errorMessage();
        echo "->erreur<br>";
    }


    if (strpos($stringAvancement, $id_chap) !== false) {
        //valeur deja présente
        $stringAvancement = $stringAvancement; //ajout du nouveau chapitre
    }else{
        $stringAvancement = $stringAvancement."-".$id_chap; //ajout du nouveau chapitre
    }
   // echo "avancement -> ".$stringAvancement;

    try { 
        //$requete_prepare= $bdd->prepare("INSERT INTO suivre(avancement) VALUES '$stringAvancement' "); // on prépare notre requête
        $requete_prepare= $bdd->prepare("UPDATE suivre SET avancement='$stringAvancement' WHERE id_user = '$id_user' AND id_mooc = '$id_mooc'"); // on prépare notre requête
        $requete_prepare->execute();
        //var_dump($requete_prepare);
        echo "->updateSuivreChap<br>";
    } catch (Exception $e) { 
        echo $e->errorMessage();
        echo "->erreur<br>";
    }


}


//Fonction permettant de calculer la similitude entre 2 chaines (algorithme de levenshtein)
//Attention il y une limite pour la longueur de la chaine
function similaire($str1, $str2) {
    $strlen1=strlen($str1);
    $strlen2=strlen($str2);
    $max=max($strlen1, $strlen2);
    $splitSize=250;
    if($max>$splitSize)
    {
        $lev=0;
        for($cont=0;$cont<$max;$cont+=$splitSize)
        {
            if($strlen1<=$cont || $strlen2<=$cont)
            {
                $lev=$lev/($max/min($strlen1,$strlen2));
                break;
            }
            $lev+=levenshtein(substr($str1,$cont,$splitSize), substr($str2,$cont,$splitSize));
        }
    }
    else
    	$lev=levenshtein($str1, $str2);
    $porcentage= -100*$lev/$max+100;
    /*if($porcentage>75)	
    	similar_text($str1,$str2,$porcentage);*/
 	return $porcentage;
}


//compare 2 chaine au format json
function compareTab($strChoix, $strSoluce){
    $strSoluce=str_replace(',','","',$strSoluce);//car la structure du json n'est pas pareil
    $strSoluce=str_replace('"",""','","',$strSoluce);//car la structure du json n'est pas pareil
    //var_dump($strChoix);
    //var_dump($strSoluce);

    $strJsonChoix = json_decode($strChoix);
    $strJsonSoluce= json_decode($strSoluce);


    $compteur = 0; //nombre de bonne réponse
    $sizeArraySoluce = count($strJsonSoluce);
    $sizeArrayChoix = count($strJsonChoix);
    $lePourcentage = 0;
    //echo '<br>taille'.$sizeArraySoluce;

    foreach($strJsonChoix as $keyChoix){
        //echo '+'.$keyChoix.'+';
        foreach($strJsonSoluce as $keySoluce){
            if($keyChoix==$keySoluce){
                $compteur = $compteur + 1;
            }
        }
    }

    if($sizeArraySoluce==$compteur &&  $sizeArraySoluce==$sizeArrayChoix){
        echo '100% juste';
        $lePourcentage = 100;
    }else if($sizeArraySoluce==$compteur && $sizeArraySoluce<$sizeArrayChoix){
        //100% juste mais 
       echo 'juste mais trop de réponse';
       $lePourcentage = ($sizeArraySoluce/$sizeArrayChoix)*100;
    }else if($sizeArraySoluce==$compteur && $sizeArraySoluce>$sizeArrayChoix){
        //100% juste mais 
       echo 'juste mais trop de réponse';
       $lePourcentage = ($sizeArrayChoix/$sizeArraySoluce)*100;
    }else if($sizeArraySoluce>$compteur){
        echo $compteur.' réponse(s) juste sur '.$sizeArraySoluce;
        if($sizeArrayChoix==0)
            $sizeArrayChoix=0.1;
        $lePourcentage = (($compteur/$sizeArraySoluce)*100)/(($sizeArrayChoix/$sizeArraySoluce)); //sort 100 si aucun choix different
        if($lePourcentage==100){
            $lePourcentage = (($sizeArrayChoix/$sizeArraySoluce)*100);
        }
    }else{
        echo 'trop de réponse';
        $lePourcentage = ($sizeArraySoluce/$compteur)*100;
    }
    echo '<br>score inseré :'.$lePourcentage;

    return $lePourcentage;

}


$lepourcentage=compareTab($meschoix,$solutions);
echo '<br><br><br>Debug<br> les réponses sont :'.$solutions."<br>info débug : ".$idm." ".$idc."  ".$tabide." -solution ".$solutions." -choix".$meschoix;

//Calcul du %
$lepourcentage=intval($lepourcentage); //Cast en entier
//Utilisation du malus
if(($lepourcentage-$malus)<0){
    $lepourcentage = 0;
}else{
    $lepourcentage = $lepourcentage-$malus;
}


if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user']))){
    //ok session
    $id_user=$_SESSION['id_user'];
    $score = $lepourcentage;
    insertFaitToBDDwithUpdate($score,$id_user,$ide); //Insertion en BDD
    updateSuivreChap($_SESSION['id_user'],$idc,$idm);
    //echo "passage en bdd";
}else{
    echo '<br>test hors-ligne';
}




/*
echo '<br><br><br>Debug<br>';

if($meschoix == $solutions){
	echo '100% CORRECT <br> les réponses sont :'.$solutions."<br><br>info débug : ".$idm." ".$idc."  ".$tabide." -solution ".$solutions." -choix".$meschoix;
}else if($lepourcentage>70){ 
	//il a plus de 70% juste donc on affiche les bonnes réponses
	echo $lepourcentage.'% CORRECT <br> les réponses sont :'.$solutions."<br><br>info débug ".$idm." ".$idc."  ".$tabide." -solution ".$solutions." -choix".$meschoix;
}else{
	echo $lepourcentage.'% CORRECT <br> les réponses sont : (avoir un score plus élevé)<br><br>info débug '.$idm."  ".$idc." --- ".$tabide." -solution ".$solutions." -choix".$meschoix;
}
exit();
*/
?>