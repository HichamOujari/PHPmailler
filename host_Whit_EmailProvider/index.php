<?php
	//host with email provider
	$sender = ""; // from
	$email  = "" // to
	$entete  = 'MIME-Version: 1.0' . "\r\n";
	$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$entete .= 'From: ' . $sender . "\r\n";
	$message = ""; //message to send
	$subject = ""; //subject
	$retour = mail($email, $subject, $message, $entete);
	exit();
?>