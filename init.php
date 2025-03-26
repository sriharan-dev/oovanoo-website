<?php
//session checker
session_start();
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', FALSE);
ini_set('display_startup_errors', FALSE);


//system variable
$systemHostlink = "https://$_SERVER[HTTP_HOST]" . "/oonavoo-website/";
$systemPagelink = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$systemPathLink = "$_SERVER[REQUEST_URI]";
$systemImage404 = $systemHostlink . "media/system/image404.png";
	

include('controller/mail-controller.php');

$mailController = new MailController();
?>
