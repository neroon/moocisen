<?php
include 'connect.inc.php';  /// Connection bdd

//ok=1   ko=0
function formValid(){
	$verif = 1;
	if (isset($_POST['email'])) {
 		echo $_POST['email'];
	 }else{
	 	$verif=0;
	 }
	
	if($verif==0){
		return 0;
	}else{
		return 1;
	}
}

//Evite d'avoir 2 mail identique en bdd ok=1 ko=0
function emailExist(){
	include 'connect.inc.php';
	$verif = 1; //existant par defaut
	$email = $_POST['email'];
	try { 
	$requete_prepare = $bdd->prepare("SELECT * FROM user where email='$email'"); // on prépare notre req
	$requete_prepare->execute();
	$result = $requete_prepare->fetchAll( PDO::FETCH_ASSOC );
	} catch (Exception $e) { 
		echo $e->errorMessage();
  		echo "->erreur";
	}

	if (empty($result)){
		$verif = 0;
	}
	return $verif;
}

$code =" ";
//Fonction qui genere une chaine aléatoire
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Met a jour l id pour le reset du mdp
function updateIdResetPwd(){
 	include 'connect.inc.php';
 	$valEmail = $_POST['email'];
 	$valEmailMd5 = (generateRandomString(3).$valEmail);
	$valEmailMd5 = md5($valEmailMd5);
	var_dump($valEmailMd5);
	try { 
		$requete_prepare= $bdd->prepare("UPDATE user SET reset_password='$valEmailMd5' WHERE email='$valEmail'"); // on prépare notre requête
		$requete_prepare->execute();
		echo "->OK";
		
	} catch (Exception $e) { 
  		echo $e->errorMessage();
  		echo "->erreur";
	}
	$code=$valEmailMd5;
	return $valEmailMd5;
 }


function sendEmail($urlLink){
	// Check for empty fields
	if(empty($_POST['email']))
	{
		echo "Erreur pas de mail";
		return false;
	}
	$name = "MOOC Mot de passe";
	$url = 'http://'.$_SERVER['SERVER_NAME'];
	$email_address = $_POST['email']; //email de destination
	$urlLink = $urlLink;
	$message = "A Bientot";
	//$email_address = '"$email_address"';
		
	// Create the email and send the message
	$to = "$email_address"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Contact :  $name";
	//$email_body = "Voici votre le lien pour le nouveau mot de passe\n\n"."\n\nEmail: <a href='mooc/reset_password?id=$email_address'>$email_address</a>\n\nUrl: $urlLink\n\n$message";
	 $email_body = '
     <html>
      <head>
       <title>Voici votre lien pour le nouveau mot de passe</title>
      </head>
      <body>
       <p>Voici votre lien pour le nouveau mot de passe</p>
       Email : '.$email_address.'<br>
       Lien: <a href='.$url.'/app/modules/not-connected/changerMdp.php?id='.$urlLink.'>'.$url.'/app/modules/not-connected/changerMdp.php?id='.$urlLink.'</a> <br>
       URL: '.$url.'/app/modules/not-connected/changerMdp.php?id='.$urlLink.'</a> <br>
       '.$message.' <br>
       Sinon vous pouvez vous rendre sur la page "mot de passe oublié" et rentrer le code : '.$code.'<br>
      </body>
     </html>
     ';
	$headers = "From: mooc@isen.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= "Reply-To: $email_address";	
	//$email_body->isHTML(true);
	try{
		mail($to,$email_subject,$email_body,$headers);
	}
	catch(Exception $Excep){
		echo $e->errorMessage();
  		echo "->erreur mail";
	}
	
	return true;		
}

$url = 'http://'.$_SERVER['SERVER_NAME'];
$verifMail = emailExist();
$verif = formValid();
if($verifMail==0){
	//echo '<br>Mail inconnu';
	header ("location: ../modules/not-connected/mdpOublie.php?erreur=Mail inconnu");
}else if($verif==1){
	$urlResetPwd=updateIdResetPwd();
	echo '<br>Url a envoyer = '.$url.'/moocisen/app/modules/not-connected/changerMdp.php?id='.$urlResetPwd;
	sendEmail($urlResetPwd); // envoie de l'email
	header ("location: ../index.php?ok=Mot de passe envoyé");
}
else{
	//echo '<br>wrong form';
	header ("location:  ../modules/not-connected/mdpOublie.php?erreur=Formulaire erreur");
}

?>