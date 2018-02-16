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
	public function Index(){
		$this->home();
	}
	public function home(){
		$data = array();
		$table= 'post';
		$categorytable= 'category';
		// all post show 
		$postModel = $this->load->model("PostModel");
		$data['allPost']=$postModel->getAllPost($table);

		// cat list 

		$catModel = $this->load->model("CatModel");
		$data['catlist']=$catModel->catlist($categorytable);
		// get letest post 
		$limit = 5;
		$data['letestPost']=$postModel->getLetestPost($table,$limit);

		$this->load->view("header");
		$this->load->view("search",$data);
		$this->load->view("content",$data);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");
	}

	public function postDetails($id){
		
		$data = array();
		$tablepost= 'post';
		$tableCat = 'category';
		$postModel = $this->load->model("PostModel");
		$data['postDataByID']=$postModel->getPostByID($tablepost,$tableCat,$id);	

		// cat list 

		$catModel = $this->load->model("CatModel");
		$data['catlist']=$catModel->catlist($tableCat);
		// get letest post 
		$limit = 5;
		$data['letestPost']=$postModel->getLetestPost($tablepost,$limit);

		$this->load->view("header");
		$this->load->view("search",$data);
		$this->load->view("single-post",$data);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");
	}

	public function postByCat($id){
		
		$data = array();
		$tablepost= 'post';
		$tableCat = 'category';
		$postModel = $this->load->model("PostModel");
		$data['postByCat']=$postModel->getPostByCat($tablepost,$tableCat,$id);	
		// cat list 

		$catModel = $this->load->model("CatModel");
		$data['catlist']=$catModel->catlist($tableCat);
		// letest post 
		$limit = 5;
		$data['letestPost']=$postModel->getLetestPost($tablepost,$limit);

		$this->load->view("header");
		$this->load->view("search",$data);
		$this->load->view("postbycat",$data);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");
	}
	public function search(){
		$data = array();
		$tablepost= 'post';
		$tableCat = 'category';
		$kyeword = isset($_REQUEST['kyeword'])?$_REQUEST['kyeword']:"";
		$catid =isset($_REQUEST['catid'])?$_REQUEST['catid']:"";


		$postModel = $this->load->model("PostModel");
		$data['postsearch']=$postModel->getPostBySearch($tablepost,$kyeword,$catid);	
		// cat list 

		$catModel = $this->load->model("CatModel");
		$data['catlist']=$catModel->catlist($tableCat);
		// letest post 
		$limit = 5;
		$data['letestPost']=$postModel->getLetestPost($tablepost,$limit);

		$this->load->view("header");
		$this->load->view("search",$data);
		$this->load->view("searchresult",$data);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");
	}

	


}
?>	