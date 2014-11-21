<?php
require_once('config.php');
header('content-type: text/json');
if(count($_POST)>0 && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['type']))
{
	extract($_POST);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo errorJson("Error :: Invalid Email");
		exit; 
	}
	if($password != $re_password){
		echo errorJson("Error :: Passwords does not match");
		exit;
	}
	if($cw->isUserExists($email)){
		echo errorJson("Error :: Email already exists");
		exit;
	}
	$id = $cw->saveNewUser($email, $password, $type);
	$code = $cw->generateVerificationCode($id);
	$content = "Hi Guest,\r\n Thank you for registering in Campuswave. \r\n please click the below verification link and confirm your registration. \r\n http://campuswave.in/userverify.php?code=".$code;
	//send_normal_mail($email, 'Campuswave Verification', $content);
	echo successJson(REGISTRATION_SUCCESS_MESSAGE);
}
else{
	echo errorJson("Error :: required fields missing");
}
?>