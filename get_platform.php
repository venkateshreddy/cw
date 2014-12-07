<?php
/*require_once('classes/campuswave.class.php');
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
}*/
?>


<?php
require_once('config.php');
require_once('classes/campuswave.class.php');
$cw = new CampusWave('admin');
header('content-type: text/json');
if(isset($_POST['id']) && is_numeric($_POST['id'])){
	$result = $cw->getPlatform($_POST['id']);
	echo successJson($result);
}
else{
	echo errorJson("Error:: invalid inputs");
}
?>