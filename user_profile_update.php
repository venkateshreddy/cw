<?php
session_start();
require_once('config.php');
header('content-type: text/json');
extract($_POST);
$id = $_SESSION['userid'];
if($id != "" && $f_name != "" && $l_name !="" && $mobile != "")
{
	
	$code = $cw->store_user_details($id,$f_name,$l_name,$mobile,$city,$qualification,$branch,$month,$year,$marks,$inst_location,$inst,$university);
	echo successJson($code);
}
else{
	echo errorJson("Error :: required fields missing");
}
?>