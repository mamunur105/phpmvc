<?php  

/**
* 
*/
class Category  extends Dcontrolar
{
	
	function __construct(){
		parent::__construct();
	}

	public function categoryList(){ 
		$data = array();
		$table= 'category';
		$catmodel = $this->load->model("CatModel");
		$data['category']=$catmodel->catlist($table);	
		$this->load->view("category",$data);
	}
	public function catById($a){ 
		$data = array() ;
		$table= 'category' ;
		$id= $a ;
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
						'catname'=>$name,
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
	public function update(){
		$table = "category" ;
		$cond = "id=1" ;
		$data = array(
			'catname'=>"Cow",
			'title'=>"Sell"
		);
		$catmodel = $this->load->model("CatModel") ;
		$result = $catmodel->catupdate($table,$data,$cond);
	}
}