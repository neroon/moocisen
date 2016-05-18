<?php

function readchap($filename) {
	if(!file_exists($filename))
		throw new Exception ("not found");

    $tab=file($filename);
    $content="";
    $l=0;
    $total=count($tab);

    while($l<$total) {
        if(strpos($tab[$l],"===========")!==false)
            break;
        $l++;
    }
    $l++;
    while($l<$total) {
        if(strpos($tab[$l],"===========")!==false)
            break;
        $content.=$tab[$l];
        $l++;
    }

    return $content;
}

function readchaps($max) {
    $tab=array();
    
    for($i=1;$i<=$max;$i++)
    try{
        $tab[]=readchap("mooc/chapitres/chapitre$i.php");
	}catch(Exception $e){}

    return $tab;
}
