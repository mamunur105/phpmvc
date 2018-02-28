<?php 

/**
* Form validation  
*/
class DForm 
{
	public $curentvalue ;
	public $value = array();
	public $errors = array();
	
	public function __construct()	{}

	public function post($key)	{
		$this->value[$key] = trim( $_POST[$key]) ;
		$this->curentvalue = $key ;
		return $this;
	}

	public function isEmpty(){
		if (empty($this->value[$this->curentvalue])) {
			$this->errors[$this->curentvalue]['empty'] = "Field Is mandatory " ;
		}
		return $this;
	}

	public function isCatEmpty(){
		if ($this->value[$this->curentvalue]==0) {
			$this->errors[$this->curentvalue]['empty'] = "cat Field Is mandatory " ;
		}
		return $this;
	}

	public function length($min=0,$max=100){
		if (strlen($this->value[$this->curentvalue]) < $min  OR strlen($this->value[$this->curentvalue]) > $max ) {
			$this->errors[$this->curentvalue]['length'] = "Shuld be minimum ".$min." And max ".$max." letters ";
		}
		return $this;
	} 

	public function submit(){
		if (empty($this->errors)) {
			return true ;
		}else{
			return false;
		}
	} 

}