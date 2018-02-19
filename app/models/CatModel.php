<?php
/**
* catogory model 
*/
class CatModel extends Dmodel
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function catlist($table){
		$sql ="SELECT * FROM $table ORDER BY id DESC ";
		return $this->db->select($sql);
	}
	public function catid($table,$id){
		$sql ="SELECT * FROM $table WHERE id=:id ";
		$data = array(":id" =>$id);
		return $this->db->select($sql,$data);

	}
	public function insertcat($table,$data){
		return $this->db->insert($table,$data);
	}

	public function catupdate($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}

	public function delCatbyId($table,$cond){
		return $this->db->delete($table,$cond);
	}


	


}


?>