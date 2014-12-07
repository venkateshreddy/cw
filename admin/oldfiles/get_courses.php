<?php
require_once('../classes/campuswave.class.php');
$cw = new CampusWave('admin');
extract($_REQUEST);
$result = $cw -> getCourses($id);
if(sizeof($result) > 0)
{
	foreach ($result as $key => $value) {
		?>
		<option value="<?=$value['qid']?>"><?=$value['qname']?></option>
		<?php
	}
}
else{
	?>
	<option value="">No Courses avaliable</option>
	<?php
}
?>
