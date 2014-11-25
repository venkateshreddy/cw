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
        $check_user = "select user_id, type from user_login where email = '".$this->escapeString($email)."' and password = '".md5($this->escapeString($password))."' and type = '".$this->escapeString($type)."'";
        $id = 0;
        $result = $this -> getResult($check_user, 'one');
        if(count($result)>0 && isset($result['user_id']))
        	return $result;
        else
        	return false;
	}

	public function saveNewUser($email = "", $password = "", $type = 1){
		$id  = null;
        $save_new_user = "insert into user_login (email, password, type, status) values ('".$this->escapeString($email)."','".md5($this->escapeString($password))."','".$this->escapeString($type)."','0')";
        $id = $this -> getResult($save_new_user);
        return $id;
	}

	public function getActiveQualifications($parent_id = 0){
		$qualifications = array();
		$sql = "select qid, qname from qualifications where parent_id = $parent_id and status = 1";
		$qualifications = $this -> getResult($sql);
		return $qualifications;
	}

	public function getUniversities(){
		$universities = array();
		$sql = "select id, name, location from universities where status = 1";
		$universities = $this -> getResult($sql);
		return $universities;
	}

	public function getColleges($uid = null){
		$colleges = array();
		$sql = "select id, name, location from colleges where status = 1";
		if(!is_null($uid)){
			$sql .= " and university_id=".$uid;
		}
		$colleges = $this -> getResult($sql);
		return $colleges;
	}

	public function getRoles($type = 1){
		$designations = array();
		$sql = "select * from roles where type = $type and status = 1";
		$designations = $this -> getResult($sql);
		return $designations;
	}

	public function getCitiesByState(){
		$cities = array();
		$sql = "select cities.id, cities.name, states.name as state from states join cities on states.id=cities.state_id where  cities.status = 1";
		$cities = $this -> getResult($sql);
		return $cities;
	}

	public function saveRecruiterProfile($profile = array()){
		$id = null;
		$sql = "insert into recruiter_details (id, userid, account_type, company, contact_person, mobile, designation, city, company_size, requirements) VALUES ('', ".$_SESSION['userid'].",'".$this->escapeString($profile['account_type'])."','".$this->escapeString($profile['company'])."','".$this->escapeString($profile['contact_person'])."','".$this->escapeString($profile['mobile'])."','".$this->escapeString($profile['designation'])."','".$this->escapeString($profile['city'])."','".$this->escapeString($profile['employees_count'])."','".$this->escapeString($profile['requirements'])."')";
		$id = $this -> getResult($sql);
		return $id;
	}

	public function saveInstituteProfile($profile = array()){
		$id = null;
		$sql = "insert into recruiter_details (id, userid, account_type, institute, contact_person, mobile, designation, city, requirements) VALUES ('', ".$_SESSION['userid'].",'".$this->escapeString($profile['account_type'])."','".$this->escapeString($profile['institute'])."','".$this->escapeString($profile['contact_person'])."','".$this->escapeString($profile['mobile'])."','".$this->escapeString($profile['designation'])."','".$this->escapeString($profile['city'])."','".$this->escapeString($profile['requirements'])."')";
		$id = $this -> getResult($sql);
		return $id;
	}

	public function getStates()
	{
		$sql = "select * from states where order by name asc";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getCities()
	{
		$sql = "select * from cities where oredr by name asc";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function store_user_details($id,$f_name,$l_name,$mobile, $city, $qualification,$branch,$month,$year, $markss,$marks,$inst){
		$result = "insert into student_details values('','$id','$f_name','$l_name','$mobile', '$city', '$qualification','$branch','$month','$year','$markss','$marks','$inst',1)";
		$result = $this -> getResult($result);
    	return $result; 
	}

	public function saveProjects($doc,$qualification,$department,$type,$title){
		$sql = "insert into projects values ('','$qualification','$dep','$type','$title','$doc',1)";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getProjects(){
		$sql = "select * from projects";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function DeleteProject($id){
		$sql = "delete from projects where id= $id";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function saveBannerImages($image,$slidedate , $slidetitle,$slidecat,$slidecom)
	{
		$sql = "insert into banner_images values ('','$image','$slidedate','$slidetitle','$slidecat','$slidecom',1)";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getBanngerImages()
	{
		$sql = "select * from banner_images";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function DeleteImage($id)
	{
		$sql = "delete from banner_images where id= $id";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getTestimonials(){
		$sql = "select * from testimonials";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function saveTestimonials($name,$content){
		$sql = "insert into testimonials values('','$name','$content',1)";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function DeleteTesti($id){
		$sql = "delete from testimonials where id= $id";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function getWhatsHot(){
		$sql = "select * from whatshot";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function DeleteWhatsHot($id){
		$sql = "delete from whatshot where id = $id";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function saveWhatsHot($title,$description,$link){
		$sql = "insert into whatshot values('','$title','$description','$link',1)";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function getLatestNews(){
		$sql = "select * from latestnews";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function DeleteLatestNews($id){
		$sql = "delete from latestnews where id = $id";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function saveLatestNews($title,$link,$description,$date){
		$sql = "insert into latestnews values('','$date','$title','$link','$description',1)";
		$result = $this -> getResult($sql);
		return $result;
	}

	public function getQualfications(){
		$sql = "select * from qualifications where parent_id = 0";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getCourses($id){
		$sql = "select * from qualifications where parent_id = $id";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getUserDetails($uid = 0, $type = 1){
		$tables = array(
						1 => 'student_details',
						2 => 'recruiter_details',
						3 => 'institute_details'
					);
		$sql = "select * from ".$tables[$type]." where userid = $uid";
		$result = $this -> getResult($sql);
		return $result;
	}
	public function getUserName($uid = 0, $type = 1){
		$tables = array(
						1 => 'student_details',
						2 => 'recruiter_details',
						3 => 'institute_details'
					);
		$field_name = array(
						1 => 'fname',
						2 => 'company',
						3 => 'institute'
					);
		$sql = "select ".$field_name[$type]." as name from ".$tables[$type]." where userid = $uid";
		$result = $this -> getResult($sql);
		return current($result);
	}
}
?>
