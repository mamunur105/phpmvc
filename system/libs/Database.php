<?php
/**
* 
*/
class Database extends PDO 
{
	
	public function __construct($dsn,$user,$pass)  
	{
		parent::__construct($dsn,$user,$pass);			
	}
	public function select($sql,$data=array(),$fetchstyle = PDO::FETCH_ASSOC){
		$stmt 	= $this->prepare($sql);
		foreach ($data as $key => $value) {
			 $stmt->bindParam($key,$value);
		}
		$stmt->execute();
		return $stmt->fetchALL($fetchstyle);
	}
	public function insert($table,$data){
		$keys = implode(",", array_keys($data)) ;
		$valus = ':'.implode(", :", array_keys($data)) ;
		$sql = "INSERT INTO $table($keys) VALUES ($valus)" ;
		$stmt = $this->prepare($sql);
		foreach ($data as $key => $value) {
			 $stmt->bindParam(":$key",$value);
		}
		return $stmt->execute();
	}
	
	public function update($table,$data,$cond){
		// $keys = implode(",", array_keys($data)) ;
		// $valus = ':'.implode(", :", array_keys($data)) ;
		// $sql = "UPDATE  $table SET " ;
		// $stmt = $this->prepare($sql);
		$updatekeyes =  NULL ;
		foreach ($data as $key => $value) {
			$updatekeyes .= "$key=:$value,";
			 $stmt->bindParam(":$key",$value);
		}
		return $stmt->execute();
	}


}?>