<?php 
/**
 * 
 */
class InitProduct extends Dcontrolar
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function categoryList(){ 	
		$table= 'category';
		$catmodel = $this->load->model("CatModel");
		$data['category'] = $catmodel->catlist($table);
		return 	$data ;
	}

}