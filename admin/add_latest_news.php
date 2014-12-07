<?php
error_reporting(0);
require_once('../classes/campuswave.class.php');
$admin = new CampusWave();
$admin->authenticate();

require_once('../config.php');
$testi = $cw -> getLatestNews();
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

<table align="center">
<form action="add_latests_news.php" method="post" enctype="multipart/form-data">
    <tr><td>Title</td><td><input type="text" class="field-long" name="title" id="title"></td></tr>
    <tr><td>Link</td><td><input type="text" class="field-long" name="link" id="link"></td></tr>
    <tr><td>Description</td><td><textarea name="description" id="description" class="field-long field-textarea"></textarea></td></tr>
    <tr><td>date</td><td><input type="text" name="date" id="date"></td></tr>
    <tr><td></td><td><input type="submit" value="Submit" name="submit"></td></tr>
</form>
</table>
</div>
<div style="clear:both"></div>
<div class="display-details">
<table>
	<tr>
		<th>Title</th><th>Link</th><th>Description</th><th>date</th><th>Delete</th>
	</tr>
	<?php 
	foreach ($testi as $key => $value) {
	?>
	<tr>
		<td><?=$value['title']?></td><td><?=$value['link']?></td><td><?=$value['description']?></td><td><?=$value['date']?></td>
		<td><input type="button" value="Delete" onClick="deletetesti(<?=$value['id']?>)"></td>
	</tr>
	<?php
	}
	?>
</table>
</div>
</div>
<!-- /#page-wrapper -->

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
			$.post('delete_latest_news.php',
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