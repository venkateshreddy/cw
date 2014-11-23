<?php
session_start();
if(!isset($_SESSION['userid']) || $_SESSION['userid']=="" || !is_numeric($_SESSION['userid']))
{
	if(!isset($is_index))
		header('location: index.php');
}
/*else{
	if(isset($is_index))
		header('location: profile.php');
}*/
?>