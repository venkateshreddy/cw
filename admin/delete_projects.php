<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('app');
extract($_REQUEST);
$result = $cw -> DeleteProject($id);
echo $result;
?>