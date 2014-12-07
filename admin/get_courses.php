<?php
require_once('../config.php');
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('admin');
header('content-type: text/json');
if(isset($_POST['id']) && is_numeric($_POST['id'])){
	$result = $cw->getCourses($_POST['id']);
	echo successJson($result);
}
else{
	echo errorJson("Error:: invalid inputs");
}
?>