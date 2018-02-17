<?php

/**
* 
*/
class Admin extends Dcontrolar
{
	
	public function __construct(){
		parent::__construct();	
		Session::checksession();
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


}