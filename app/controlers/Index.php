<?php
/**
* index controller 
*/
class Index extends Dcontrolar
{ 
	
	public function __construct()
	{
		parent:: __construct();
	}
	public function home(){
		$this->load->view("home");
	}
	public function category(){ 
		$data = array();
		$table= 'category';
		$catmodel = $this->load->model("CatModel");
		$data['cat']=$catmodel->catlist($table);	
		$this->load->view("category",$data);
	}
	public function catById(){ 
		$data = array() ;
		$table= 'category' ;
		$id= 2 ;
		$catmodel = $this->load->model("CatModel") ;
		$data['catid']=$catmodel->catid($table,$id) ;	
		$this->load->view("catid",$data) ;	
	}
	public function  addCategory(){
		$this->load->view("addcategory") ;
	}
	public function insertCategory(){
		$table = "category" ;

		if (isset($_POST['name']) && isset($_POST['title'])) {
				$name = $_POST['name'];
				$title = $_POST['title'];
				$data = array(
						'name'=>	$name,
						'title'=>$title
					);
				$catmodel = $this->load->model("CatModel") ;
				$result = $catmodel->insertcat($table,$data);
				$mess =array();
					if ($result == 1) {
						$mess['msg'] = "Category Added Successfully......" ;
					}else{
						$mess['msg'] = "Category Not Added ......" ;
					}
					$this->load->view("addcategory",$mess) ;
			}
		}

}
?>	