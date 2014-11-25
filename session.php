<?php
session_start();
if(!isset($_SESSION['userid']) || $_SESSION['userid']=="" || !is_numeric($_SESSION['userid']))
{
	if(isset($is_ajax)){
		echo errorJson("Error :: Please log in to do this action");
		exit;
	}
	else if(!isset($is_index))
		header('location: index.php');
}
?>