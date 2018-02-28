<?php

/**
* Post Model 
*/
class PostModel extends Dmodel
{
	
	public function __construct(){
		parent::__construct();
	}
	public function getAllPost($tablepost,$tableCat){
		$sql ="SELECT $tablepost.*,$tableCat.catname FROM 
			$tablepost INNER JOIN $tableCat
			ON  $tablepost.cat = $tableCat.id ORDER BY id DESC LIMIT 3 ";
		return $this->db->select($sql);

	}
	public function getPostlist($table){
		$sql ="SELECT * FROM $table ORDER BY id DESC ";
		return $this->db->select($sql);
	}
	public function getPostByID($tablepost,$tableCat,$id){
		$sql ="SELECT $tablepost.*,$tableCat.catname FROM 
			$tablepost INNER JOIN $tableCat
			ON  $tablepost.cat = $tableCat.id
		 	WHERE $tablepost.id = $id ";
			return $this->db->select($sql);
	}
	public function getPostWithCat($tablepost,$tableCat){
		$sql ="SELECT $tablepost.*,$tableCat.catname FROM 
			$tablepost INNER JOIN $tableCat
			ON  $tablepost.cat = $tableCat.id ORDER By id DESC ";
			return $this->db->select($sql);
	}
	public function getPostByCat($tablepost,$tableCat,$id){

		$sql ="SELECT $tablepost.*,$tableCat.catname FROM 
			$tablepost INNER JOIN $tableCat
			ON  $tablepost.cat = $tableCat.id
		 	WHERE $tableCat.id = $id ";
			return $this->db->select($sql);
	}
	public function getLetestPost($table,$limit=4){

		$sql ="SELECT * FROM $table ORDER BY id DESC LIMIT $limit";
		return $this->db->select($sql);
	}

	public function getPostBySearch($tablepost,$kyeword,$catid){
		if(isset($kyeword) && !empty($kyeword)){
			$sql = "SELECT * FROM $tablepost WHERE title LIKE '%$kyeword%' OR content LIKE '%$kyeword%' " ;
		}elseif (isset($catid) && !empty($catid) ) {
				$sql ="SELECT * FROM $tablepost WHERE cat=$catid";
		}else if (empty($kyeword)  && empty($catid)) {
		
			header("Location:".BASE_URL."/Index/home");
		}
		return $this->db->select($sql);
	}
	public function insertPost($table,$data){
	 	return $this->db->insert($table,$data);
	}
	public function delPostbyId($table,$cond){
		return $this->db->delete($table,$cond);
	}
	public function editPostbyId($table,$id){
		$sql ="SELECT * FROM $table WHERE id=:id ";
		$data = array(":id" =>$id);
		return $this->db->select($sql,$data);
	}
	public function  postUpDated($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}
	

}