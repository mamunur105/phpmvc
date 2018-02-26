<?php 

/**
* Form validation  
*/
class DForm 
{
	public $curentvalue ;
	public $value = array();
	public $error = array();
	
	public function __construct()	{}

	public function post($key)	{
		$this->value[$key] = trim( $_POST[$key]) ;
		$this->curentvalue = $key ;
		return $this;
	}

	public function isEmpty(){
		if (empty($this->value[$this->curentvalue])) {
			$this->$error[$this->curentvalue]['empty'] = "Field Is mandatory " ;
		}
		return $this;
	}

	public function length($min=0,$max = 50){
		if (strlen($this->value[$this->curentvalue]]) < $min ) OR strlen($this->value[$this->curentvalue]]) > $max ) {
			$this->$error[$this->curentvalue]['length'] = "Shuld be minimum ".$min."And max ".$max." letters ";
		}
		return $this;
	} 

	public function submit(){
		if (empty($this->$error)) {
			return true ;
		}else{
			return false;
		}
	} 






}