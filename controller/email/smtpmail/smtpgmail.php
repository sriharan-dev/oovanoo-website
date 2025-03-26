<?php
include "classes/class.phpmailer.php"; // include the class name
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail - empty, none
$mail->Host = "smtp.gmail.com"; //eg : md-20...
$mail->Port = 465; // or 587 - for us 25
$mail->IsHTML(true);
$mail->Username = "ashokrajkp@gmail.com"; //test@rjbuilders.co.in
$mail->Password = "nEwPassword"; //pass,123
$mail->SetFrom("ashokrajkp@gmail.com"); //ramyangel.john@gmail.com
$mail->Subject = "Your Gmail SMTP Mail";
$mail->Body = "<b>Hi, your first SMTP mail via gmail server has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>";
$mail->AddAddress("ramyangel.john@gmail.com"); //test@rjbuilders.co.in
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
	echo "Message has been sent";
}
?>