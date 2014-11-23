<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('app');
extract($_REQUEST);
$result = $cw -> DeleteLatestNews($id);
echo $result;
?>