<?php
//session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
require_once("db.class.php");
class UserDAO{

	private $db = null;
	public function __construct(){
		$this -> db = new DB();
	}

	public function DeleteConsultant($id){
		$sql = "delete from user_login where uid ='".$id."' ";
		$con_details = "delete from consultant_details where user_id ='".$id."' ";
		if($this -> db -> executeQuery($sql) && $this -> db -> executeQuery($con_details)){
			return true;
		}
		else{
			return false;
		}
		return true;
	}

	public function DeleteUser($id){
		$sql = "delete from user_login where uid ='".$id."' ";
		$user_details = "delete from user_details where uid ='".$id."'";
		$user_services_provided = "delete from user_services_provided where user_id = '".$id."'";
		if($this -> db -> executeQuery($sql) && $this -> db -> executeQuery($user_details) && $this-> db-> executeQuery($user_services_provided)){
			return true;
		}
		else{
			return false;
		}
		return true;
	}

	public function updateConsultantCommonDetails($user_obj){
		if(is_null($user_obj))
			return false;
		$did = 0;
		$sql_save_user_details = "update consultant_details set 
		consultancy_name 	= '".$user_obj->getConsultancyName()."',
		properator_name 	= '".$user_obj->getProperatorName()."',
		address 			= '".$user_obj->getAddress()."',
		establishment 		= '".$user_obj->getEstablishment()."',
		mobile 				= '".$user_obj->getMobile()."',
		website 			= '".$user_obj->getWebsite()."'
		where user_id 		= '".$user_obj->getUserId()."' ";
		//echo $sql_save_user_details;
		if($this -> db -> executeQuery($sql_save_user_details))
		{
			$did = $this -> db -> getResult();
		}
		return $did;
	}
	public function updateUserCommonDetails($user_obj){
		$update_details = "update user_details set member_ship_number = '".$user_obj->getMemberShipId()."',
		experience =  '".$user_obj->getExperience()."', 
		firm_name = '".$user_obj->getFirmName()."',
		firm_address = '".$user_obj->getFirmAddress()."',
		mobile = '".$user_obj->getMobile()."', 
		city_id = '".$user_obj->getCity()."',
		year = '".$user_obj->getYear()."' 
		where uid = '".$user_obj->getUserId()."' ";
		if($this -> db -> executeQuery($update_details))
		{
			$did = $this -> db -> getResult();
		}
		return $did;
	}
	
	public function UpdateUserServices($id = null , $services = array(), $expertise_service = null){
		if(count($services)>0){
			//echo $expertise_service."expert";
			$delete_services  = "delete from user_services_provided where user_id = '".$_SESSION['uid']."'";
			if($this -> db -> executeQuery($delete_services))
				{
					$rids[] = $this -> db -> getResult();
				}
			$rids = array();
			foreach($services as $key=>$val){
				$is_expertise = 0;
				if($expertise_service == $val)
					$is_expertise = 1;
				$sql_save_service_details = "insert into user_services_provided values ('', $id, $val, '$is_expertise', 1)";
				if($this -> db -> executeQuery($sql_save_service_details))
				{
					$rids[] = $this -> db -> getResult();
				}
			}
			return $rids;
		}
		return null;
	}

	public function getUserByPass($old,$id){
		$sql = "select * from user_login where password = '".$old."' and uid = '".$id."' ";
		if($this -> db -> executeQuery($sql)){
			$user = $this -> db -> getResult();
		}
		return $user;
	}

	public function updateUserLoginDetails($new,$id){
		$sql = "update user_login set password = '".$new."' where uid = '".$id."' ";
		if($this -> db -> executeQuery($sql)){
			$user = $this -> db -> getResult();
		}
		return $user;
	}

	public function approveUser($id){
		$sql = "update user_login set status = 2 where uid ='".$id."' ";
		if($this -> db -> executeQuery($sql)){
			//$user = $this -> db -> getResult();

			$result = "select * from user_login where uid ='".$id."' ";
			if($this -> db->executeQuery($result)){
				$user = $this -> db -> getResult();
				foreach ($user as $key => $value) {
					$name = $value['name'];
					$email = $value['email'];
					$pass = $value['password'];
				}
				require_once('../mail.php');
				$content  = "Hi ".$name.",\n\n";
				
				$content  .= "Congrats,You are approved by the admin.\n";
				$content  .= "Please find login details below. \n\n";
				$content  .= "email: ".$email."\n\n";
				$content  .= "Password: ".$pass."\n\n";
				$content  .= "Thank you."."\n\n";
				$content  .= "Regards,\n";
				$content  .= "MLG Team.";
				$subject   = "MyLoanGuroo::Login Details";
				mlg_mail($email, $subject, $content);
			}
			
		}
		return $user;
	}
	public function rejectUser($id){
		$sql = "update user_login set status = 3 where uid ='".$id."' ";
		if($this -> db -> executeQuery($sql)){
			$user = $this -> db -> getResult();
		}
		return true;
	}
	public function getAdminByEmailPassword($user_name,$password){
		$user = array();
		$sql_get_user_details = "select * from admin_login where user_name = '".addslashes($user_name)."' and password = '".addslashes($password)."'";
		if($this -> db -> executeQuery($sql_get_user_details))
		{
			$user = $this -> db -> getResult();
		}
		return $user;
	}

		public function getUserServiceDetails($user_id){
		$rids = array();
			
				$sql_get_service_details = "select service_id,is_expertise from  user_services_provided where user_id = $user_id";
				if($this -> db -> executeQuery($sql_get_service_details))
				{
					$rids[] = $this -> db -> getResult();
				}
			
			return $rids;
	}

	public function saveUserLoginDetails($user_obj = null, $user_type = 1){
		if(is_null($user_obj))
			return false;
		$user_id = 0;
		$sql_save_user_login = "insert into user_login values ('', '".$user_obj->getEmail()."', '".$user_obj->getPassword()."', '".$user_obj->getName()."',".$user_type.", 1)";
		if($this -> db -> executeQuery($sql_save_user_login))
		{
			$user_id = $this -> db -> getResult();
		}
		return $user_id;
	}

	public function saveUserCommonDetails($user_obj){
		if(is_null($user_obj))
			return false;
		$did = 0;
		$sql_save_user_details = "insert into user_details values('', '".$user_obj->getUserId()."','".$user_obj->getMemberShipId()."', '".$user_obj->getExperience()."', '".$user_obj->getFirmName()."','".$user_obj->getFirmAddress()."', '".$user_obj->getMobile()."', '".$user_obj->getCity()."','".$user_obj->getArea()."','".$user_obj->getYear()."','".$user_obj->getTypes()."')";
		//echo $sql_save_user_details;
		if($this -> db -> executeQuery($sql_save_user_details))
		{
			$did = $this -> db -> getResult();
		}
		return $did;
	}

	public function saveConsultantCommonDetails($user_obj){
		if(is_null($user_obj))
			return false;
		$did = 0;
		$sql_save_user_details = "insert into consultant_details values('', '".$user_obj->getUserId()."','".$user_obj->getConsultancyName()."','".$user_obj->getProperatorName()."', '".$user_obj->getFName()."','".$user_obj->getGender()."' , '".$user_obj->getAddress()."','".$user_obj->getEstablishment()."', '".$user_obj->getMobile()."','".$user_obj->getWebsite()."', '".$user_obj->getCity()."','".$user_obj->getType()."','1')";
		//echo $sql_save_user_details;
		if($this -> db -> executeQuery($sql_save_user_details))
		{
			$did = $this -> db -> getResult();
		}
		return $did;
	}

	public function saveUserServices($id = null, $services = array(), $expertise_service = null){
		if(count($services)>0){
			//echo $expertise_service."expert";
			$rids = array();
			foreach($services as $key=>$val){
				
				$sql_save_service_details = "insert into user_services_provided values ('', $id, $val, 0, 1)";
				if($this -> db -> executeQuery($sql_save_service_details))
				{
					$rids[] = $this -> db -> getResult();
				}
			}
			return $rids;
		}
		return null;
	}

	public function getUserByEmailPassword($email = "", $password = "")
	{
		$user = array();
		$sql_get_user_details = "select * from user_login where email = '".addslashes($email)."' and password = '".addslashes($password)."'";
		if($this -> db -> executeQuery($sql_get_user_details))
		{
			$user = $this -> db -> getResult();
		}
		return $user;
	}
	public function getUserByEmail($email)
	{
		$user = array();
		$sql_get_user_details = "select * from user_login where email = '".addslashes($email)."'";
		if($this -> db -> executeQuery($sql_get_user_details))
		{
			$user = $this -> db -> getResult();
		}
		return $user;
	}
	public function getUserDetails($uid = 0){
		$user_details = array();
		if(!is_numeric($uid))
			return $user_details;
		$get_details = "select * from user_details where uid = ".$uid;
		if($this -> db -> executeQuery($get_details))
		{
			$user_details = $this -> db -> getResult();
		}
		return $user_details;	
	}
	public function getCaUserDetails(){
		$user_details = array();
		$get_details = "select * from user_login where user_type = 1";
		if($this -> db -> executeQuery($get_details))
		{
			$user_details = $this -> db -> getResult();
		}
		return $user_details;
	}
	public function getConsultantDetails($uid = 0){
		$user_details = array();
		if(!is_numeric($uid))
			return $user_details;
		$get_details = "select * from consultant_details where user_id = ".$uid;
		//echo $get_details;
		if($this -> db -> executeQuery($get_details))
		{
			$user_details = $this -> db -> getResult();
		}
		return $user_details;	
	}
	public function getConsultantUserDetails(){
		$user_details = array();
		$get_details = "select * from user_login where user_type = 2";
		if($this -> db -> executeQuery($get_details))
		{
			$user_details = $this -> db -> getResult();
		}
		return $user_details;
	}
}
?>