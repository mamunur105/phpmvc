<?php
/**
* catogory model 
*/
class LoginModel extends Dmodel
{
	
	public function __construct(){
		parent::__construct();
	}

	public function userControl($table,$username,$password){
		$sql = "SELECT * FROM $table WHERE username=? AND password=?";
		return $this->db->affectedRow($sql,$username,$password);
	}

}