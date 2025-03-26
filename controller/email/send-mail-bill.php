<?php
$data = $_POST['content'];
$to = $_POST['to'];
$ad = $_POST['ad_id']; //ad-id
//echo $data;

//mail coding
include 'smtpmail/library.php'; // include the library file
include "smtpmail/classes/class.phpmailer.php"; // include the class name

//$email = $to;
$email = "ashokrajkp@gmail.com"; //to address
$mail	= new PHPMailer; // call the class 
$mail->IsSMTP(); 
//$mail->Host = "md-20.webhostbox.net"; //Hostname of the mail server
$mail->Host = "mail.rjbuilders.co.in"; //Hostname of the mail server
$mail->Port = 25; //Port of the SMTP like to be 25, 80, 465 or 587
$mail->SMTPAuth = true; //Whether to use SMTP authentication
$mail->Username = "info@adpuzz.com"; //Username for SMTP authentication any valid email created in your domain
$mail->Password = "9585823578A"; //Password for SMTP authentication
$mail->AddReplyTo("info@adpuzz.com", "Reply name"); //reply-to address
$mail->SetFrom("lead@adpuzz.com", "AdPluzz Classifieds"); //From address of the mail - create dummy email 
// put your while loop here like below,
$mail->Subject = "Sun Power System - Invoice No. : " . $ad->getId(); //Subject od your mail
$mail->AddAddress($email, "User"); //To address who will receive this email
$mail->MsgHTML( $data ); //Put your body of the message you can place html code here
$send = $mail->Send(); //Send the mails

if($send){
	echo 0;
	exit();
}
else{
	echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
	exit();
}

?>