<?php

//ok=1   ko=0
function sessionValid(){
	$verif = 1;
	if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user'])))
    {
    	//session ok
        //echo $_SESSION['id_user'];
    }
    else
    {
    	$verif = 0;
    }
    return $verif;
}

$verifSession = sessionValid();
if($verifSession == 1){
    //echo ("ok session valide");
}else{
    header ("location: ../includes/logout.php?erreur=Probleme de session");
}
?>