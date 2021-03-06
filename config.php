<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('classes/campuswave.class.php');
$cw = new CampusWave('app');

//config variables
define('REGISTRATION_SUCCESS_MESSAGE', "Registration Successful. Please check your mail and click on verification link");
$roles = array(
			1 => 'Student',
			2 => 'Recruiter',
			3 => 'Institute'
			);
//error function
function errorJson($message = ""){
	return json_encode(array('status'=>0, 'error'=>$message));
}
//success function
function successJson($data){
	return json_encode(array('status'=>1, 'data'=>$data));
}

//normal mail
function send_normal_mail($to="", $subject="", $message=""){
	require_once('classes/mailer.php');
	cw_mail($to, $subject, $message);
}

//add user to session
function addUserToSession($user_id = 0, $type=1){
	session_start();
	$_SESSION['userid'] = $user_id;
	$_SESSION['type'] = $type;
}

//get cities by state
function getCitiesbyState($obj){
	$cities_list = $obj->getCitiesByState();
	$cities = array();
	foreach($cities_list as $key=>$val){
		$state = $val['state'];
		unset($val['state']);
		$cities[$state][] = $val;
	}
	return $cities;
}
// get banner images
function getBannerImages(){
	$img = $obj->getBanngerImages();
	return $img;
}
?>