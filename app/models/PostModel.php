<?php

/**
* Post Model 
*/
class PostModel extends Dmodel
{
	
	public function __construct(){
		parent::__construct();
	}
	public function getAllPost($table){
		$sql ="SELECT * FROM $table ORDER BY id DESC LIMIT 3";
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








	
}