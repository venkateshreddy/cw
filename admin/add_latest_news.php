<?php
require_once('../config.php');
$testi = $cw -> getLatestNews();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latest News</title>
	<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script> 
	<link type="text/css" rel="stylesheet"  href="admin_style.css"  />

</head>
<body>
<div class="main">
<div class="links">
	<a href="dashboard.php">Back to Dashboard</a>
</div>

<div class="header form-style-1">

<table align="center">
<form action="add_latests_news.php" method="post" enctype="multipart/form-data">
   
    <tr><td>Title</td><td><input type="text" class="field-long" name="title" id="title"></td></tr>
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
		<th>Title</th><th>Description</th><th>date</th><th>Delete</th>
	</tr>
	<?php 
	foreach ($testi as $key => $value) {
	?>
	<tr>
		<td><?=$value['title']?></td><td><?=$value['description']?></td><td><?=$value['date']?></td>
		<td><input type="button" value="Delete" onclick="deletetesti(<?=$value['id']?>)"></td>
	</tr>
	<?php
	}
	?>
</table>
</div>
</div>
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