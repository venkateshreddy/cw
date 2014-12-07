<?php
error_reporting(0);
require_once('../classes/campuswave.class.php');
$admin = new CampusWave();
$admin->authenticate();

require_once('../config.php');
$testi = $cw -> getTestimonials();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>home</title>
   <?php include('includefiles.php'); ?>
   <link type="text/css" rel="stylesheet"  href="admin_style.css"  />
</head>

<body>

    <div id="wrapper">
        <?php include('header.php'); ?>
        <div id="page-wrapper">
<div class="header form-style-1">
<table>
<form action="add_testi.php" method="post" enctype="multipart/form-data">
   
    <tr><td>Name</td><td><input type="text" name="name" id="name"></td></tr>
    <tr><td>Content</td><td><textarea name="content" id="content" class="field-long field-textarea"></textarea></td></tr>
    <tr><td></td><td><input type="submit" value="Submit" name="submit"></td></tr>
</form>
</table>
<div style="clear:both"></div>
<div class="display-details">
<table>
	<tr>
		<th>Name</th><th>Content</th><th>Delete</th>
	</tr>
	<?php 
	foreach ($testi as $key => $value) {
	?>
	<tr>
		<td><?=$value['name']?></td><td><?=$value['content']?></td><td><input type="button" value="Delete" onClick="deletetesti(<?=$value['id']?>)"></td>
	</tr>
	<?php
	}
	?>
</table>
</div></div>
 </div>
	</div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

<script type="text/javascript">
	function deletetesti(id){
		var con = confirm("Are you sure you want to Delete this..?");
		if(con == true){
			$.post('delete_testi.php',
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
