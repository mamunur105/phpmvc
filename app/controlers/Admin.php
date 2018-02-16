<?php

/**
* 
*/
class Admin extends Dcontrolar
{
	
	public function __construct(){
		parent::__construct();	
	}

	public function logIn(){
		
		$this->load->view("admin/login");
		
	}

}