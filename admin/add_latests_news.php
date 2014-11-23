<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('app');

		extract($_POST);
		$id = $cw->saveLatestNews($title,$description,$date);
        header('location:add_latest_news.php?status=success');
   
?>