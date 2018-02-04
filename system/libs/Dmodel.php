<?php
/**
* Main model 
*/
class Dmodel
{
	protected $db = array();
	
	public function __construct() 
	{		
		$dsn = 'mysql:dbname=mvc;host=localhost';
		$user ="root";
		$pass ='';
		$this->db = new Database($dsn,$user,$pass);
	}

}

?>