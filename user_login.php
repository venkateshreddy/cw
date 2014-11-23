<?php
require_once('config.php');
header('content-type: text/json');
if(count($_POST)>0 && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type']))
{
	extract($_POST);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo errorJson("Error :: Invalid Email");
		exit; 
	}
	$user_details = array();
	if($basic_details = $cw->isValidUser($email, $password, $type)){
		addUserToSession($basic_details['user_id'], $basic_details['type']);
		echo successJson("success");
		exit;
	}
	else{
		echo errorJson("Error :: Invalid Credentials");
		exit;
	}
}
else{
	echo errorJson("Error :: required fields missing");
}
?>