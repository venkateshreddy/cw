<?php
error_reporting(0);
require_once('../classes/campuswave.class.php');
$admin = new CampusWave();
$admin->authenticate();

require_once('../config.php');
$projects = $cw -> getProjects();
$qual = $cw -> getQualfications();
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
<form action="store_projects.php" method="post" enctype="multipart/form-data">
   
    <tr><td>Qualification</td><td>
    <select name="qualfication" class="field-select" id="qualifid">
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
		<td><?=$value['title']?></td><td><a href="projects/<?=$value['project_file_path']?>">Click</a></td>
		<td><input type="button" value="Delete" onClick="deletetesti(<?=$value['pid']?>)"></td>
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
    $("#qualifid").change(function(){ 
        var id = $(this).val(); //alert(id);
        if(id == ""){
          alert("you must select the qualification");
        }
        else{
          $.post("get_courses.php",{id:id},function(data){ //alert(data);
            if(data.status==0){
              alert(data.error);
            }
            else{
              $("#courses").html("<option value=''>Select</option>");
              if(data.data.length == 0){
                str = "<option value='0'>Course Not Found</option>";
                $("#courses").append(str);
              }
              else{
                for(i=0; i<data.data.length;i++){
                  str = "<option value='"+data.data[i].qid+"'>"+data.data[i].qname+"</option>";
                  $("#courses").append(str);   
                }
              }
            }
          });
        }
      });

</script>
</body>
</html>
