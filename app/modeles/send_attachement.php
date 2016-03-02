<?php

/* Send email with attachement */

session_start();
if ((isset($_SESSION['email'])) && (!empty($_SESSION['email']))){
    //ok
    if($_POST && isset($_FILES['my_file']))
    {

        $from_email = 'mooc-daemon@mail.fr'; //sender email
        $recipient_email = $_SESSION['email']; //recipient email
        $subject = 'Travail rendu MOOC'; //subject of email
        $message = 'Travail rendu par '.$_SESSION['email'].' '.$_SESSION['nom'].' '.$_SESSION['prenom']; //message body
        
        //get file details we need
        $file_tmp_name    = $_FILES['my_file']['tmp_name'];
        $file_name        = $_FILES['my_file']['name'];
        $file_size        = $_FILES['my_file']['size'];
        $file_type        = $_FILES['my_file']['type'];
        $file_error       = $_FILES['my_file']['error'];
        
        $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        if($file_error>0)
        {
            die('upload error');
        }
        //read from the uploaded file & base64_encode content for the mail
        $handle = fopen($file_tmp_name, "r");
        $content = fread($handle, $file_size);
        fclose($handle);
        $encoded_content = chunk_split(base64_encode($content));


            $boundary = md5("sanwebe"); 
            //header
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "From:".$from_email."\r\n"; 
            $headers .= "Reply-To: ".$user_email."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
            
            //plain text 
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
            $body .= chunk_split(base64_encode($message)); 
            
            //attachment
            $body .= "--$boundary\r\n";
            $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
            $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
            $body .= $encoded_content; 
        
        $sentMail = @mail($recipient_email, $subject, $body, $headers);
        if($sentMail) //output success or failure messages
        {       
            die('Thank you for your email');
        }else{
            die('Could not send mail! Please check your PHP mail configuration.');  
        }
    }
}else{
    echo 'pb de session';
}





?>