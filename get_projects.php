<?php
require_once('classes/campuswave.class.php');
$cw = new CampusWave('admin');
extract($_REQUEST);
$typeid=$_REQUEST['id'];
$pid=$_REQUEST['pid'];
$result = $cw -> getProjects1($pid,$typeid);
if(sizeof($result) > 0)
{
	foreach ($result as $key => $value) {
		?>
		<tr>
            <td><?=$value['pid']?></td>
            <td><?=$value['title']?></td>
            <td><a href="#">DOWNLAOD</a></td>
          </tr>
		<!-- <option value="<?=$value['id']?>"><?=$value['name']?></option> -->
		<?php
	}
}
else{
	?>
	 
	<tr><td></td><td>No Records Found</td><td></td></tr>
	<?php
}
?>
