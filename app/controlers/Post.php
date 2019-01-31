<?php  

/**
* 
*/
class Post extends InitPost
{

	// public $tbl_cat = TABLE_CATEGORY; 
	function __construct(){
		parent::__construct();
	}

	public function catList(){ 
		$tbl_cat = TABLE_CATEGORY;
		$this->load->view("category",parent::categoryList($tbl_cat));
	}

	public function AllPost(){ 
		$tbl_cat = TABLE_CATEGORY;
		$this->load->view("category",parent::PostList($tbl_cat));
	}


	
}