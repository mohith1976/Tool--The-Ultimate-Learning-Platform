<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if(($email = $_POST['email'])) {


try {
	$mail->SMTPDebug = 0;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'mohith.nakka982@gmail.com';				
	$mail->Password = 'fpzjtdnopposbjfp';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom($_POST['email']);		
	$mail->addAddress('mohith.nakka982@gmail.com');
	$mail->addReplyto($_POST['email']);

	
	$mail->isHTML(true);								
	$mail->Subject = 'TOOLs College Setup';
	$mail->Body = ' <b>please press on the link and go for the next process.</b><br>"https://forms.gle/L7zpgwq5rvwssYhv6"<br><br><br>Dont worry,This is one time process. ';
	$mail->AltBody = 'please press on the link and go for the next process.';
	$mail->send();
	echo '<script language="javascript">';
    echo 'alert("Mail has been sent successfully!,Please check your mail inbox for next process.Pleasewait,you will be redirected to your mail in 3,2,1..")';
    echo '</script>';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}	
}

?>