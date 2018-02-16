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
		$this->load->view("admin/login");	
	}

	public function loginAuth(){
		$table = "user";
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$loginmodel = $this->load->model("LoginModel");
		$count = $loginmodel->userControl($table,$username,$password);
		if ($count > 0) {
			
		}else{
			header("Location:".BASE_URL."/Login");
		}
	}

}