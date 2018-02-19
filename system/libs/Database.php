<?php
/**
* 
*/
class Database extends PDO 
{
	
	public function __construct($dsn,$user,$pass){
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
			 $stmt->bindValue(":$key",$value);
		}
		return $stmt->execute();
	}
	
	public function update($table,$data,$cond){
		$updatekeyes =  NULL ;
		foreach ($data as $key => $value) {
			$updatekeyes .= "$key=:$key,";
		}
		$updatekeyes = rtrim($updatekeyes,",");
		$sql = "UPDATE $table SET $updatekeyes WHERE $cond " ;
		$stmt = $this->prepare($sql);
		foreach ($data as $key => $value) {
			 $stmt->bindValue(":$key",$value);
		}
		return $stmt->execute();
	}

	public function delete($table,$cond,$limit=1){
		$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
		return $this->exec($sql);
	}
	public function affectedRow($sql,$username,$password){
		$stmt = $this->prepare($sql);
		$stmt->execute(array($username,$password));
		return $stmt->rowCount();
	}
	public function selectUser($sql,$username,$password){
		$stmt = $this->prepare($sql);
		$stmt->execute(array($username,$password));
		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}










}?>