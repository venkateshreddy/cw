<?php
if(isset($_REQUEST['email']) && $_REQUEST['email']!="" && isset($_REQUEST['password']) && $_REQUEST['password']!="")
{
	require_once('../classes/campuswave.class.php');
	$user_dao = new CampusWave();
	extract($_REQUEST);
	print_r($_REQUEST);
	exit;
	$user = current($user_dao->getAdminByEmailPassword($email, $password));
	if(is_array($user) && count($user)>0 )
	{
		session_start();
		$_SESSION =  array_merge($_SESSION , $user);
		echo "success";
	}
	else{
		echo "login failed. please enter valid details";
	}
}
else
{
	echo "please enter User Name and Password";
}
?>