<?php
include("init.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$email = $_POST['email'];

$companyName = "Oonavoo";


//send mail
$content = "Name - " . $name ."<br>" . "Mobile - " . $mobile . "<br>" .  "Email - " . $email . "<br>" ."Message - " . $message . ".

<br><br><br>
Best Regards,<br>
" . $companyName . "<br>";

$subject = "Enquiry Details - " . $companyName;
$to = "gpriya.tkp@gmail.com";

$mailController->sendMail( $to, $subject, $content );
echo 1;
exit();
?>