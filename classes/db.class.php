<?php
require_once('dbconfig.class.php');
class DB {
	
	private $connection = null;
	private $result = null;
	private $query_type = null;

	public function __construct($type = 'app'){
		
		if(!$this -> connection = mysqli_connect(DBConfig::$details[$type]['host'], DBConfig::$details[$type]['user'], DBConfig::$details[$type]['password'], DBConfig::$details[$type]['dbname']))
			die("could not connect to mysql");
	}

	public function executeQuery($query = ""){
		if($query == ""){
			return false;
		}
		if(!$this -> result = mysqli_query($this -> connection, $query))
			return false;
		$query_array = explode(" ", trim($query));
		if(isset($query_array))
		{
			$this ->  query_type = strtolower($query_array[0]);
		}
		return true;
	}

	public function lastInsertId($res)
    {
        return mysqli_insert_id();
    }

	public function getRowCount(){
		return mysqli_num_rows($this -> result);
	}
	public function createInsertQuery($array)
    {
            $fields=array();
            $values=array();
            foreach($array as $k=>$v)
            {
                $fields[]="$k";
                $values[]="'$v'";
            }
            return array("field"=>implode(',',$fields),"value"=>implode(',',$values));
    }
	public function getResult(){
		if($this ->  query_type == "select"){
			$results = array();
			
			if($this -> getRowCount() > 0)
			{
				while($row = mysqli_fetch_assoc($this -> result))
					$results[] = $row;
			}
			return $results;
		}
		else if($this ->  query_type == "update" || $this ->  query_type == "delete")
		{
			return mysqli_affected_rows($this -> connection);
		}
		else if($this ->  query_type == "insert")
		{
			return mysqli_insert_id($this -> connection);
		}
	}

	public function escapeString($str){
		return mysqli_real_escape_string($this -> connection, $str);
	}

	public function escapeStringsInArray($arr){
		$temp_arr = array();
		foreach($arr as $val)
		{
			$temp_arr[] = mysqli_real_escape_string($this -> connection, $val);
		}
		return $temp_arr;
	}

}
?>