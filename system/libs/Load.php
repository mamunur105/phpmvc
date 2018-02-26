<?php
/**
* CLASS LOAD
*/
class Load 
{
	
	function __construct(){
		
	}
	public function view($filename,$data = false){

		if ($data == true) {
			extract($data) ;
		}

		include 'app/view/'.$filename.'.php' ;
	}
	public function model($modelname){
		include 'app/models/'.$modelname.'.php' ;
		return new $modelname();
	}

	public function validation($calssname){
		include 'app/validation/'.$calssname.'.php' ;
		return new $calssname();
	}


}


?>