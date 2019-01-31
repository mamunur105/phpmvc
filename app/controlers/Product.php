<?php  

/**
* 
*/
class Product  extends InitProduct

{
	
	function __construct(){
		parent::__construct();
	}

	public function categoryList(){ 
		$data = parent::categoryList();
		$this->load->view("category",$data);
	}

	
}