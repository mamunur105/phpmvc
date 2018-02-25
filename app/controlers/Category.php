<?php  

/**
* 
*/
class Category  extends Dcontrolar
{
	
	function __construct(){
		parent::__construct();
		$data = array();
	}

	public function categoryList(){ 
		
		$table= 'category';
		$catmodel = $this->load->model("CatModel");
		$data['category']=$catmodel->catlist($table);	
		$this->load->view("category",$data);
	}
	public function catById($a){ 
		$table= 'category' ;
		$id= $a ;
		$catmodel = $this->load->model("CatModel") ;
		$data['catid']=$catmodel->catid($table,$id) ;	
		$this->load->view("catid",$data) ;	
	}
	public function  addCategory(){
		$this->load->view("admin/addcategory") ;
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
					$this->load->view("admin/addcategory",$mess) ;
		}
	}

	public function  editCategory($id=NULL){
		$table= 'category' ;
		$catmodel = $this->load->model("CatModel") ;
		$data['catdatabyid']=$catmodel->catid($table,$id) ;	
		$this->load->view("catupdate",$data) ;	 
	}
	public function updatecat(){
		$table = "category" ;
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$title = $_POST['title'];
		$cond = "id=$id" ;
		$data = array(
				'catname'=>$name,
				'title'=>$title
			);
		$catmodel = $this->load->model("CatModel") ;
		$result = $catmodel->catupdate($table,$data,$cond);
		$mess =array();
		if ($result == 1) {
			$mess['msg'] = "Category Updated Successfully......" ;
		}else{
			$mess['msg'] = "Category Not Updated ......" ;
		}
		$this->load->view("catupdate",$mess) ;
	}


	public function deleteCatbyId($id=NULL){
		$table = "category" ;
		$cond = "id=$id" ;
		$catmodel = $this->load->model("CatModel") ;
		$result = $catmodel->delCatbyId($table,$cond);
	}
	
}