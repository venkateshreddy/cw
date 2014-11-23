<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('app');

		extract($_POST);
		$id = $cw->saveTestimonials($name,$content);
        header('location:add_testimonials.php?status=success');
   
?>