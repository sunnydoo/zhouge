<?php

echo 'Email Sent Request';
session_cache_limiter( 'nocache' );
$subject = $_REQUEST['subject']; // Subject of your email
$to = "support@frunto.com";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['name'].'<'.$_REQUEST['email'] .'>'. "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message  = 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= 'Company: ' . $_REQUEST['company'] . "<br>";
$message .= $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'Email to ' . $to .' was sent successfully.';
	//header('Location: ../index.html');
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'Email Sent failed from php/email.php';
}
?>