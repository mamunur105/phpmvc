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

		$this->load->view("header");
		$this->load->view("content");
		$this->load->view("footer");
	}


}
?>	