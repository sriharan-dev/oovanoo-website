<?php

function PF_isImageExtensionAllowed($configController, $ext)
{
	$validExtension = 0;
	$ext = trim($ext);
	//getting allowed extensions
	$allowedExtnesions = $configController->getByName("website_image_allowed_extensions")->getCode();
	//echo $allowedExtnesions . " ::: ";
	$allowedExtnesions = explode("," , $allowedExtnesions);
	//echo sizeof( $allowedExtnesions ) . " ::: ";
	if( sizeof( $allowedExtnesions ) > 0 )
	{
		foreach( $allowedExtnesions as $allowedExtnesion )
		{
			$allowedExtnesion = trim($allowedExtnesion);
			//echo $allowedExtnesion . " - " . $ext . " :: " . strcasecmp( $allowedExtnesion, $ext ) . " >> ";
			if( strcasecmp( $allowedExtnesion, $ext ) == 0 )
			{
				$validExtension = 1;
				return $validExtension;
			}
		}
	}
	return $validExtension;
}

function PF_sendSMS($configController, $mobile, $message)
{
	//getting sms plugin information
	$senderId = $configController->getByName("msg_sms_sender_id")->getCode();
	$username = $configController->getByName("msg_sms_username")->getCode();
	$password = $configController->getByName("msg_sms_password")->getCode();
	$route = $configController->getByName("msg_sms_route_number")->getCode();
	//sms coding
	$message = urlencode($message);
	
	$url = "http://login.chennaisms.com/api/mt/SendSMS?user=".$username."&password=".$password."&senderid=".$senderId."&channel=Trans&DCS=0&flashsms=0&number=".$mobile."&text=".$message."&route=" . $route;
	//echo $url;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);      
	curl_close($ch);
}

function PF_generateRandomPassword($length)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	$randomString = ''; 
  
	for ($i = 0; $i < $length; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	}   
	return $randomString; 
}

function PF_generateRandomNumber($length)
{
	$characters = '0123456789';
	$randomString = ''; 
  
	for ($i = 0; $i < $length; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	}   
	return $randomString; 
}

function PF_neturalizeString($string)
{
	$string = str_replace("'", "\'", $string);
	return $string;
}

function PF_getManualDateTimeFormat($mysqlDate, $manualFormat)
{
	$newDate = date($manualFormat, strtotime($mysqlDate));
	return $newDate;
}

function PF_getIds($objects)
{
	
	$ids = "";
	foreach( $objects as $object )
	{
		if( strlen($ids) == 0 )
		{
			$ids = $object->getId();
		}
		else
		{
			$ids = $ids . "," . $object->getId();
		}
	}
	return $ids;
}

function PF_getFromConfig($configs, $name)
{
	foreach( $configs as $config )
	{
		if( strcasecmp( $config->getName(), $name ) == 0 )
		{
			return $config->getCode();
		}
	}
	return "";
}

?>