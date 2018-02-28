<?php
/**
* 
*/
class User extends Dcontrolar
{
	
	public function __construct(){
		parent::__construct();	
		Session::checksession();
		$data = array();
	}
	public function Index(){
		echo "home()";
	}
	public function makeUser(){
		
	}
	public function allUser(){
		$table= 'user';
		$UserModel = $this->load->model("UserModel");
		$data['userList']=$UserModel->userList($table);	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/userlist",$data);
		$this->load->view('admin/footer');
	}

	public function userById($id){ 
		$table= 'user' ;
		 
		$catmodel = $this->load->model("UserModel") ;
		$data['catid']=$catmodel->catid($table,$id) ;	
		$this->load->view("catid",$data) ;	
	}
	public function  addUser(){
		$table= 'user';
		$UserModel = $this->load->model("UserModel");
		$data['userList']=$UserModel->userList($table);	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/addnewUser",$data);
		$this->load->view('admin/footer');
	}
	// public function insertUser(){
	// 	$table = "category" ;

	// 	if (isset($_POST['name']) && isset($_POST['title'])) {
	// 			$name = $_POST['name'];
	// 			$title = $_POST['title'];
	// 			$data = array(
	// 					'catname'=>$name,
	// 					'title'=>$title
	// 				);
	// 			$catmodel = $this->load->model("CatModel") ;
	// 			$result = $catmodel->insertcat($table,$data);
	// 			$mess =array();
	// 				if ($result == 1) {
	// 					$mess['msg'] = "Category Added Successfully......" ;
	// 				}else{
	// 					$mess['msg'] = "Category Not Added ......" ;
	// 				}
	// 				$this->load->view("admin/addcategory",$mess) ;
	// 	}
	// }

	public function  editUser($id=NULL){
		$table= 'user' ;
		$UserModel = $this->load->model("UserModel") ;
		$data['userdata']=$UserModel->userid($table,$id) ;	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view("admin/edituser",$data);
		$this->load->view('admin/footer');
	}
	// public function updateUser($id=NULL){
	// 	$table = "user" ;
		
	// 	// $id = $_POST['id'];
	// 	$name = $_POST['name'];
	// 	$title = $_POST['level'];
	// 	$cond = "id=$id" ;
	// 	$data = array(
	// 			'username'=>$name,
	// 			'level'=>$title
	// 		);
	// 	$UserModel = $this->load->model("UserModel") ;
	// 	$result = $UserModel->userUpdate($table,$data,$cond);
	// 	$mess =array();
	// 	if ($result == 1) {
	// 		$mess['msg'] = "user Updated Successfully......" ;
	// 	}else{
	// 		$mess['msg'] = "user Not Updated ......" ;
	// 	}
	// 	$url = BASE_URL."/User/allUser?msg=".urldecode(serialize($mess)) ;
	// 	header("Location:".$url);
	// }


	public function deleteUserbyId($id=NULL){
		$table = "user" ;
		$cond = "id=$id" ;
		$catmodel = $this->load->model("UserModel") ;
		$result = $catmodel->delUserbyId($table,$cond);
		if ($result == 1) {
			$mess['msg'] = "Category Delete Successfully......" ;
		}else{
			$mess['msg'] = "Category Not Delete ......" ;
		}
		$url = BASE_URL."/User/allUser?msg=".urldecode(serialize($mess)) ;
		header("Location:".$url);
	}


}