<?php
session_cache_limiter( 'nocache' );
$subject = $_REQUEST['subject']; // Subject of your email
$to = "opticasalome@gmail.com";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['name'].'<'.$_REQUEST['email'] .'>'. "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message  = 'Nombre: ' . $_REQUEST['name'] . "<br>";
$message .= 'Email: ' . $_REQUEST['email'] . "<br>";
$message .= 'Asunto: ' . $_REQUEST['subject'] . "<br>";
$message .= 'Mensaje: ' . $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
	// header('Location: ../index.html');
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>