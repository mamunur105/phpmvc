<?php

/**
* 
*/
class Admin extends Dcontrolar
{
	
	public function __construct(){
		parent::__construct();	
		Session::checksession();
		$data = array();
	}
	public function Index(){
		$this->home();
	}
	public function home(){
		// $this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/bordhome');
		$this->load->view('admin/footer');
	}

	public function  addCategory(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/addcategory") ;
		$this->load->view('admin/footer');
	}
	
	public function categoryList(){ 
		$table= 'category';
		$catmodel = $this->load->model("CatModel");
		$data['category']=$catmodel->catlist($table);	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/category",$data);
		$this->load->view('admin/footer');
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

				$url = BASE_URL."/Admin/categoryList?msg=".urldecode(serialize($mess)) ;
				header("Location:".$url);

		}
	}

	public function  editCategory($id=NULL){
		$table= 'category' ;
		$catmodel = $this->load->model("CatModel") ;
		$data['catdatabyid']=$catmodel->catid($table,$id) ;	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/catupdate",$data) ;	
		$this->load->view('admin/footer'); 
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
		$url = BASE_URL."/Admin/categoryList?msg=".urldecode(serialize($mess)) ;
		header("Location:".$url);
	}
	public function deleteCatbyId($id){
		$table = "category" ;
		$cond = "id=$id" ;
		$catmodel = $this->load->model("CatModel") ;
		$result = $catmodel->delCatbyId($table,$cond);
		if ($result == 1) {
			$mess['msg'] = "Category Delete Successfully......" ;
		}else{
			$mess['msg'] = "Category Not Delete ......" ;
		}
		$url = BASE_URL."/Admin/categoryList?msg=".urldecode(serialize($mess)) ;
		header("Location:".$url);
	}

	public function newPost(){
		$table= 'category';
		$catmodel = $this->load->model("CatModel");
		$data['category']=$catmodel->catlist($table);			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/addpost",$data) ;
		$this->load->view('admin/footer');	
	}

	public function allPost(){
		$table= 'post';
		$category = "category" ;
		$PostModel = $this->load->model("PostModel");
		$data['allpost']=$PostModel->getPostWithCat($table,$category);	
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/postlist",$data);
		$this->load->view('admin/footer');
	}

	public function addPost(){
		$table = "post" ;
		if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category'])) {
				$title = $_POST['title'];
				$content = $_POST['content'];
				$category = $_POST['category'];
				$data = array(
						'content'=>$content,
						'title'=>$title,
						'cat'=>$category
					);
				$catmodel = $this->load->model("PostModel") ;
				$result = $catmodel->insertPost($table,$data);
				$mess =array();

				if ($result == 1) {
					$mess['msg'] = "Post Added Successfully......" ;
				}else{
					$mess['msg'] = "Post Not Added ......" ;
				}

				$url = BASE_URL."/Admin/allPost?msg=".urldecode(serialize($mess)) ;
				header("Location:".$url);

		}
	}
	public function  editPost($id=NULL){
		$table= 'post' ;
		$category= 'category' ;

		$PostModel = $this->load->model("PostModel") ;
		$data['Postdata']=$PostModel->editPostbyId($table,$id) ;

		$catmodel = $this->load->model("CatModel");
		$data['category']=$catmodel->catlist($category);	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/editPost",$data) ;	
		$this->load->view('admin/footer');

	}
	public function upDatePost(){
		$table = "post" ;
		if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category'])) {
				$id = $_POST['id'];
				$title = $_POST['title'];
				$content = $_POST['content'];
				$category = $_POST['category'];
				$cond = "id=$id" ;

				$data = array(
						'content'=>$content,
						'title'=>$title,
						'cat'=>$category
					);
				$catmodel = $this->load->model("PostModel") ;
				$result = $catmodel->postUpDated($table,$data,$cond);

				$mess =array();

				if ($result == 1) {
					$mess['msg'] = "Post Updated Successfully......" ;
				}else{
					$mess['msg'] = "Post Not Updated ......" ;
				}

				$url = BASE_URL."/Admin/allPost?msg=".urldecode(serialize($mess)) ;
				header("Location:".$url);

		}
	}
	public function deletePost($id=NULL){
		$table = "post" ;
		$cond = "id=$id" ;
		$PostModel = $this->load->model("PostModel") ;
		$result = $PostModel->delPostbyId($table,$cond);
		if ($result == 1) {
			$mess['msg'] = "Post Delete Successfully......" ;
		}else{
			$mess['msg'] = "Post Not Delete ......" ;
		}
		$url = BASE_URL."/Admin/allPost?msg=".urldecode(serialize($mess)) ;
		header("Location:".$url);
	}

}