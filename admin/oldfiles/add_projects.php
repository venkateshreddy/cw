<?php
require_once('../config.php');
$projects = $cw -> getProjects();
$qual = $cw -> getQualfications();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Projects</title>
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
<form action="store_projects.php" method="post" enctype="multipart/form-data">
   
    <tr><td>Qualification</td><td>
    <select name="qualfication" class="field-select" onchange="ShowCourse(this.value)">
    	<option value="">Select Qualfication</option>
    	<?php
    	foreach ($qual as $key => $value) {
    	
    	?>
    	<option value="<?=$value['qid']?>"><?=$value['qname']?></option>
    	<?php
    	}
    ?>
    </select>
    </td></tr>
    <tr>
    <td>Department</td>
    	<td>
    		<select id="courses" name="course" class="field-select">
    			<option value="">Select Qualification First</option>
    		</select>
    	</td>
    </tr>
    <tr><td>Project type</td><td>
    	<select name="project_type" class="field-select">
    		<option value="1">Mini Project</option>
    		<option value="2">Main Project</option>
    	</select>
    </td></tr>
    <tr>
    	<td>Project Title</td>
    	<td><input type="text" name="title" id="title" class="field-long"></td>
    </tr>
    <tr><td>Project Document</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
    <tr><td></td><td><input type="submit" value="Submit" name="submit"></td></tr>
</form>
</table>
</div>
<div style="clear:both"></div>
<div class="display-details">
<table>
	<tr>
		<!-- <th>qualification</th><th>dep</th><th>type</th> --><th>Title</th><th>Doc</th><th>Delete</th>
	</tr>
	<?php 
	foreach ($projects as $key => $value) {
	?>
	<tr>
		<!-- <td><?=$value['qualification']?></td><td><?=$value['description']?></td><td><?=$value['date']?></td> -->
		<td><?=$value['title']?></td><td><a href="projects/<?=$value['name']?>">Click</a></td>
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
			$.post('delete_projects.php',
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

	function ShowCourse(id){
		$.post('get_courses.php',
			{
				id : id
			},
			function(data){
	          if(data){
	           $('#courses').html(data);
	          }
	          
        	});
	}
</script>
</body>
</html>