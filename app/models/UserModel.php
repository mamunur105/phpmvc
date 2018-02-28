<?php 

/**
* 
*/
class UserModel extends Dmodel{

	function __construct(){
		parent::__construct();
	}


	public function userList($table){
		$sql ="SELECT * FROM $table ORDER BY id DESC ";
		return $this->db->select($sql);
	}

	public function userid($table,$id){
		$sql ="SELECT * FROM $table WHERE id=:id ";
		$data = array(":id" =>$id);
		return $this->db->select($sql,$data);
	}

	public function insertUser($table,$data){
		return $this->db->insert($table,$data);
	}

	public function userUpdate($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}

	public function delUserbyId($table,$cond){
		return $this->db->delete($table,$cond);
	}


}