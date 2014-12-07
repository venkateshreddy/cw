<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('admin');
$target_dir = "banner_images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		extract($_POST);
		$id = $cw->saveBannerImages($_FILES["fileToUpload"]["name"],$slidedate , $slidetitle,$slidecat,$slidecom);
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header('location:add_banner_images.php?status=success');
    } else {
        echo "Sorry, there was an error uploading your file.";
        header('location:add_banner_images.php?status=fail');
    }

}
?>