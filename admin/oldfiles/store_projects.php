<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('admin');

$target_dir = "projects/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		extract($_POST);
		$id = $cw->saveProjects($_FILES["fileToUpload"]["name"],$qualfication,$course,$project_type,$title);
        
        header('location:add_projects.php?status=success');
    } else {
        echo "Sorry, there was an error uploading your file.";
        header('location:add_projects.php?status=fail');
    }

}
?>