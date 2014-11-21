<?php
require_once("db.class.php");
class CampusWave{

	private $db = null;
	public function __construct($type = 'app'){
		$this -> db = new DB($type);
	}

	private function escapeString($string = ""){
		return $this -> db -> escapeString($string);
	}

	private function getResult($query = "", $count = ''){
		$result = null;
		if($this -> db -> executeQuery($query))
		{
			$result = $this -> db -> getResult();
		}
		if($count == 'one')		
			return current($result);
		else
			return $result;
	}

	public function generateVerificationCode($id = 0){
		$code = md5(date('Ymdhis').$id);
		$sql = "insert into verification_codes (code, user_id) values ('$code', '$id')";
		$this -> getResult($sql);
		return $code;
	}

	public function isUserExists($email = ""){
        $check_user = "select user_id from user_login where email = '".$this->escapeString($email)."'";
        $ids = $this -> getResult($check_user);
        if(count($ids) > 0)
        	return true;
        else
        	return false;
	}

	public function isValidUser($email = "", $password = "", $type = ""){
        $check_user = "select user_id from user_login where email = '".$this->escapeString($email)."' and password = '".md5($this->escapeString($password))."' and type = '".$this->escapeString($type)."'";
        $id = 0;
        $result = $this -> getResult($check_user, 'one');
        if(count($result)>0 && isset($result['user_id']))
        	$id = $result['user_id'];
        if($id > 0)
        	return $id;
        else
        	return false;
	}

	public function saveNewUser($email = "", $password = "", $type = 1){
		$id  = null;
        $save_new_user = "insert into user_login (email, password, type, status) values ('".$this->escapeString($email)."','".md5($this->escapeString($password))."','".$this->escapeString($type)."','0')";
        $id = $this -> getResult($save_new_user);
        return $id;
	}

	public function getActiveQualifications(){
		$qualifications = array();
		$sql = "select qid, qname from qualifications where parent_id = 0 and status = 1";
		$qualifications = $this -> getResult($sql);
		return $qualifications;
	}
}
?>
