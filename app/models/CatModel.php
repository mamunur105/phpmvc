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
		$sql ="SELECT * FROM $table ";
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


}


?>