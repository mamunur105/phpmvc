<?php

/**
* Post Model 
*/
class PostModel extends Dmodel
{
	
	function __construct(){
		parent::__construct();
	}
	function getAllPost($table){
		$sql ="SELECT * FROM $table ORDER BY id DESC LIMIT 3";
		return $this->db->select($sql);
	}
	function getPostByID($tablepost,$tableCat,$id){

		$sql ="SELECT $tablepost.*,$tableCat.catname FROM 
			$tablepost INNER JOIN $tableCat
			ON  $tablepost.cat = $tableCat.id
		 	WHERE $tablepost.id = $id ";
			return $this->db->select($sql);
	}


	function getPostByCat($tablepost,$tableCat,$id){

		$sql ="SELECT $tablepost.*,$tableCat.catname FROM 
			$tablepost INNER JOIN $tableCat
			ON  $tablepost.cat = $tableCat.id
		 	WHERE $tableCat.id = $id ";
			return $this->db->select($sql);
	}





	
}