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
  $headerSuccess ="Merci pour votre message !";
  $headersSuccess .='Content-Type: text/plain; charset="utf-8"'." ";
  $msgSuccess ="
  Parfumerie AM DIFFUSION a bien reçu votre message. Nous ne manquerons pas d’y répondre dans les plus brefs délais.\n
  Vous pouvez également nous contacter au 01.41.06.03.70\n
  A bientôt \n \n
  We acknowledge receipt of your email. We’ll send you an answer as soon as possible.\n
  You can also contact us by phone 00.33.1.41.06.03.70\n
  Best regards,\n \n \n
  
  PARFUMERIE AM DIFFUSION";
  

  mail($senderEmail, $headerSuccess, $msgSuccess);
  header('Location: contact.php?message=Successfull');
}

else{

  	header('Location: contact.php?message=Failed');	
}

?>