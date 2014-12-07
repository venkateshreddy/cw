<?php
require_once('classes/campuswave.class.php');
$cw = new CampusWave('admin');
extract($_REQUEST);
$result = $cw -> getPlatform($id);
if(sizeof($result) > 0)
{
	foreach ($result as $key => $value) {
		?>
		<option value="<?=$value['id']?>"><?=$value['name']?></option>
		<?php
	}
}
else{
	?>
	<option value="">No Platform avaliable</option>
	<?php
}
?>
