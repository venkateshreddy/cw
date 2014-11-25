<?php
$is_ajax = true;
require_once('session.php');
require_once('config.php');

header('content-type: text/json');
if(count($_POST)>0 && isset($_POST['account_type']) && isset($_POST['institute']) && isset($_POST['contact_person']) && isset($_POST['mobile']) && isset($_POST['designation']) && isset($_POST['city']) && isset($_POST['requirements']) && isset($_POST['captcha']))
{
	extract($_POST);
	if (!is_numeric($mobile)) {
		echo errorJson("Error :: Invalid Mobile Number");
		exit; 
	}
	session_start();
	if(trim($captcha) != $_SESSION['captcha']){
		echo errorJson("Error :: Invalid Captcha");
		exit;	
	}
	$id = $cw->saveInstituteProfile($_POST);
	echo successJson("Profile Updated Successfully");
}
else{
	echo errorJson("Error :: required fields missing");
}
?>