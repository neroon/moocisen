	<?php 
    $connect_str= "mysql:host=127.0.0.1;dbname=mooc";
    $connect_user= 'root';
    $connect_pass= '';
    try
    {
        $bdd= new PDO($connect_str, $connect_user, $connect_pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
        $utf8 = $bdd->prepare("SET NAMES UTF8");
        $utf8->execute();
    }
    catch(PDOException $e)
    {
		echo "Erreur au niveau de la BDD (verifier si la BDD existe) voir includes/connect.inc.php pour configuration";
        exit();
    }
?>