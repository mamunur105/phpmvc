<?php 
/**
 * 
 */
class InitPost extends Dcontrolar
{
	
	function __construct(){
		parent::__construct();	
	}

	public function categoryList($table = null){
		$catmodel = $this->load->model("CatModel");
		$data['category'] = $catmodel->catlist($table);
		return 	$data ;
	}

	public function PostList($table = null){
		// $catmodel = $this->load->model("CatModel");
		// $data['category'] = $catmodel->catlist($table);
		return 	$data ;
	}

}