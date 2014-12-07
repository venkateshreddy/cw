<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('admin');
extract($_REQUEST);
$result = $cw -> DeleteProject($id);
echo $result;
?>