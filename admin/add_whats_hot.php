<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('app');

		extract($_POST);
		$id = $cw->saveWhatsHot($title,$description,$link);
        header('location:add_whatss_hot.php?status=success');
   
?>