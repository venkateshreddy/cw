<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/
if(count($_REQUEST)>0){

	
	if(trim($_REQUEST['name'])=="")
	{
		echo "Please enter Name";
		exit;
	}
	
	if(trim($_REQUEST['email'])=="")
	{
		echo "Email can not be empty";
		exit;
	}
	if(trim($_REQUEST['subject'])=="")
	{
		echo "Subject can not be empty";
		exit;
	}
	if(trim($_REQUEST['mobile'])=="" || is_nan(trim($_REQUEST['mobile'])) || strlen(trim($_REQUEST['mobile']))!=10)
	{
		echo "Please enter valid (10 digit) mobile number";
		exit;
	}

	if(trim($_REQUEST['message'])=="")
	{
		echo "Message can not be empty";
		exit;
	}
	if(trim($_REQUEST['recipient'])=="")
	{
		echo "please select recipient";
		exit;
	}
	
	extract($_REQUEST);
	//$password = str_replace(" ", "_", $name).rand(1000, 2000);
	require_once('classes/campuswave.class.php');
	require_once('classes/mailer.php');
	$contact = new Campuswave();
	$mailfunction = new Mailer();

	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$subject1=$_REQUEST['subject'];
	$mobile=$_REQUEST['mobile'];
	$message=$_REQUEST['message'];
	$recipient=$_REQUEST['recipient'];
	$priority=$_REQUEST['priority'];
		
	$s_ids = $contact -> saveContact($name,$email,$subject1,$mobile,$message,$recipient,$priority);
	if(count($s_ids) > 0){
		require_once('mail.php');
		$email = 'info@campuswave.com';
		$content  = "Name: ".$name.",\n\n";
		$content  .= "Email: ".$email." .\n";
		$content  .= "Mobile: ".$mobile.". \n\n";
		$content  .= "message: ".$message."\n";
		$subject  = "Campuswave::Contact details"; 
		$mailfunction->cw_mail($email, $subject, $content);
		echo "success";
	}
}	
?>