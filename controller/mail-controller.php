<?php
//mail coding
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

class MailController
{
	
	public function sendMail($to, $subject, $body)
	{		
		/* mail coding  */
		$userName = 'testmail@tkpdemo01.co.in';
        $password = 'NOKIA@!(*)';
        $setFrom = "testmail@tkpdemo01.co.in";
        $addReplyTo = "testmail@tkpdemo01.co.in";
		
	   	// Server settings
		//$mail->SMTPDebug = 2; // for detailed debug output
		$mail = new PHPMailer(true);			
		try 
		{
			$mail->isSMTP();
			$mail->Host = 'mail.tkpdemo01.co.in';
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "tls";
			$mail->Username = $userName; // YOUR gmail email
			$mail->Password = $password; // YOUR gmail password;			
			$mail->Port = 587;

			// Sender and recipient settings
			$mail->setFrom($setFrom, "OONAVOO");
			$mail->addAddress($to, "User");		
			$mail->addReplyTo($addReplyTo, "OONAVOO"); // to set the reply to	
			
			// Setting the email content
			$mail->IsHTML(true);
			$mail->Subject = $subject;
			$mail->MsgHTML($body);			
		
			$mail->send($to, $subject, $body);
			//echo "mail sent";
			//mail($to,$subject,$content);
			return 0;
		}
		catch (Exception $e) 
		{
			echo "Email could not send";
			exit();
		}
	}	
}
?>