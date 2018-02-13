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
		$data = array();
		$table= 'post';
		$postModel = $this->load->model("PostModel");
		$data['allPost']=$postModel->getAllPost($table);

		$this->load->view("header");
		$this->load->view("content",$data);
		$this->load->view("sidebar");
		$this->load->view("footer");
	}

	public function postDetails($id){
		
		$data = array();
		$tablepost= 'post';
		$tableCat = 'Category';
		$postModel = $this->load->model("PostModel");
		$data['postDataByID']=$postModel->getPostByID($tablepost,$tableCat,$id);	
		$this->load->view("header");
		$this->load->view("single-post",$data);
		$this->load->view("sidebar");
		$this->load->view("footer");
	}

	public function postByCat($id){
		
		$data = array();
		$tablepost= 'post';
		$tableCat = 'Category';
		$postModel = $this->load->model("PostModel");
		$data['postByCat']=$postModel->getPostByCat($tablepost,$tableCat,$id);	
		$this->load->view("header");
		$this->load->view("postbycat",$data);
		$this->load->view("sidebar");
		$this->load->view("footer");
	}

	


}
?>	