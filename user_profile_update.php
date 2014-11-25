<?php
$is_ajax = true;
require_once('session.php');
require_once('config.php');
header('content-type: text/json');
if(count($_POST)>0 && isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['mobile']) && isset($_POST['city']) && isset($_POST['qualification']) && isset($_POST['branch']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['marks']) && isset($_POST['markss']) && isset($_POST['inst']) && isset($_POST['university']))
{
	extract($_POST);
	if (!is_numeric($mobile)) {
		echo errorJson("Error :: Invalid Mobile Number");
		exit; 
	}
	if(trim($captcha) != $_SESSION['captcha']){
		echo errorJson("Error :: Invalid Captcha");
		exit;	
	}
	$code = $cw->store_user_details($_SESSION['userid'],$f_name,$l_name,$mobile, $city, $qualification,$branch,$month,$year, $markss,$marks,$inst);
	echo successJson($code);
	unset($_SESSION['captcha']);
}
else{
	echo errorJson("Error :: required fields missing");
}
?>