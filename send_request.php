<?php
if(!isset($_REQUEST['name']) || trim($_REQUEST['name'])==""){
	echo "name can not be empty";
	exit;
}
if(!isset($_REQUEST['email']) || trim($_REQUEST['email'])==""){
	echo "Email can not be empty";
	exit;
}
if(!isset($_REQUEST['mobile']) || trim($_REQUEST['mobile'])=="" || !is_numeric(trim($_REQUEST['mobile']))){
	echo "Mobile can not be empty/ should be valid";
	exit;
}
if(!isset($_REQUEST['subject']) || trim($_REQUEST['subject'])==""){
	echo "Subject can not be empty";
	exit;
}
if(!isset($_REQUEST['message']) || trim($_REQUEST['message'])==""){
	echo "Message can not be empty";
	exit;
}
 $from = $_POST["name"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("info@myloanguru.com",$subject,$message,"From: $from\n");
    echo "Thank you for contacting us. We'll get back to you soon.";
?>