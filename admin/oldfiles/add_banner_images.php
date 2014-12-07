<?php
require_once('../config.php');
$images = $cw -> getBanngerImages();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add banner Images</title>
	<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script> 
	<link type="text/css" rel="stylesheet"  href="admin_style.css"  />
</head>
<body>
<div class="main">
<div class="links">
	<a href="dashboard.php">Back to Dashboard</a>
</div>
<div class="header form-style-1">
<table>
<form action="upload.php" method="post" enctype="multipart/form-data">
   <tr><td> Select image to upload:</td><td>
    <input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
    <tr><td>Slide Date</td><td><input type="text" name="slidedate" id="slidedate"></td></tr>
    <tr><td>Slide Title</td><td><input type="text" name="slidetitle" id="slidetitle"></td></tr>
    <tr><td>Slide Cat</td><td><input type="text" name="slidecat" id="slidecat"></td></tr>
    <tr><td>Slide com</td><td><input type="text" name="slidecom" id="slidecom"></td></tr>
    <tr><td></td><td><input type="submit" value="Upload Image" name="submit"></td></tr>
</form>
</table>
<div style="clear:both"></div>
<div class="display-details">
<table>
	<tr>
		<th>Image</th><th>Delete</th>
	</tr>
	<?php 
	foreach ($images as $key => $value) {
	?>
	<tr>
		<td><img src="banner_images/<?=$value['image']?>" width="100px"></td><td><input type="button" value="Delete" onclick="deleteImage(<?=$value['id']?>)"></td>
	</tr>
	<?php
	}
	?>
</table>
</div></div>
<script type="text/javascript">
	function deleteImage(id){
		var con = confirm("Are you sure you want to Delete this..?");
		if(con == true){
			$.post('delete_image.php',
			{
				id : id
			},
			function(data){
	          if(data == 1){
	            alert('Successfully deleted.');
	            location.reload();
	          }
	          
        	});
		}else{
			return false;
		}
	}
</script>
</body>
</html>