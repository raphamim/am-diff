<?php

define( "RECIPIENT_NAME", "Site web Am-diffusion" );
define( "RECIPIENT_EMAIL", "contact@amdiffusion-parfums.com" );


$success = false;
$firstName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$senderSubject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

if ( $firstName && $senderEmail && $senderSubject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "Contact depuis le site web : " . $firstName . " <" . $senderEmail . ">";
  $msgBody = "Mail reçu depuis le site web.\n
   Nom : " . $firstName ."\n 
   Mail : ". $senderEmail ."\n 
   Sujet : ". $senderSubject . " \n
   Message : " . $message . "";
  $success = mail( $recipient, $headers, $msgBody );
  
  $headerSuccess ="Merci de votre mail!";
  $msgSuccess ="
  Merci de votre mail !\n
  Nous revenons vers vous le plus rapidement possible.\n
  Vous pouvez également nous contacter au 01.41.06.03.70\n
  A bientôt \n \n
  
  Best regards,\n \n \n
  
  PARFUMERIE AM DIFFUSION";

  mail($senderEmail, $headerSuccess, $msgSuccess);
  header('Location: message-sent.php');
}

else{

  	header('Location: contact.php?message=Failed');	
}

?>