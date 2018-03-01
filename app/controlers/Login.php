<?php

/**
* 
*/
class Login extends Dcontrolar
{
	
	public function __construct(){
		parent::__construct();	
	}
	public function Index(){
		$this->logIn();
	}
	public function logIn(){
		Session::init();
		if (Session::get('login') == true) {
			header("Location:".BASE_URL."/Admin");
		}
		$this->load->view("admin/login");	
	}

	public function loginAuth(){
		$table = "user";
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$loginmodel = $this->load->model("LoginModel");
		$count = $loginmodel->userControl($table,$username,$password);
		if ($count > 0) {
			$result = $loginmodel->getUserData($table,$username,$password);
			Session::init();
			Session::set("login",true);
			Session::set("username",$result[0]['username']);
			Session::set("userid",$result[0]['id']);
			Session::set("level",$result[0]['level']);
			
			header("Location:".BASE_URL."/Admin");
			
		}else{
			header("Location:".BASE_URL."/Login");
		}
	}

	public function logout(){
		Session::init();
		Session::destroy();
		header("Location:".BASE_URL."/Login");

	}

}