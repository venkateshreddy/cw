<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('admin');
extract($_POST);
$id = $cw->saveLatestNews($title,$link,$description,$date);
header('location:add_latest_news.php?status=success');   
?>