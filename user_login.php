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

	if(!$id = $cw->isValidUser($email, $password, $type)){
		echo errorJson("Error :: Invalid Credentials");
		exit;
	}

	if(isset($id)){
		addUserToSession($id);
		echo successJson("success");
	}
}
else{
	echo errorJson("Error :: required fields missing");
}
?>