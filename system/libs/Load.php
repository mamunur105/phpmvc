<?php
/**
* CLASS LOAD
*/
class Load 
{
	
	function __construct()
	{
		# code...
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






 

}


?>