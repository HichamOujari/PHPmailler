<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';

	$body = ""; // message 
	$subject = ""; //subject
	$email = "" // receiver
	$sender = "" // sender
	$SenderName = "" // sender's name
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = "smtp";
	$mail->SMTPDebug  = 0;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com"; //host of gmail , don t forget to desable 
									     //the system of verification with 2-step from your google aacount
	$mail->Username   = ""; //put here your gmail
		$mail->Password   = ""; //put here your password
	$mail->IsHTML(true);
	$mail->AddAddress($email, "recipient-name");
	$mail->SetFrom($sender, $SenderName);
	$mail->AddReplyTo($sender,$SenderName);
	$mail->AddCC($email, "cc-recipient-name");
	$mail->Subject = $subject;
	$mail->MsgHTML($body);
	$mail->Send();
 	exit();
?>