<?php
require_once('config.php');
header('content-type: text/json');
if(isset($_POST['id']) && is_numeric($_POST['id'])){
	$result = $cw->getActiveQualifications($_POST['id']);
	echo successJson($result);
}
else{
	echo errorJson("Error:: invalid inputs");
}
?>