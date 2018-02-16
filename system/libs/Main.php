<?php

/**
* 
*/
class Main 
{
	public $url;
	public $controlerName ="Index";
	public $methodName = "Index";
	public $controlerPath = "app/controlers/";
	public $contrler ;
	public function __construct(){
		# code...
	}

	public function getUrl(){
		$this->url = isset($_GET['url']) ? $_GET['url'] : NULL;
		if ($this->url != NULL ) {
			$this->url = rtrim($this->url,'/');
			$this->url = explode("/", filter_var($this->url,FILTER_SANITIZE_URL));
		}else{
			unset($this->url);
		}

	}

	public function loadControler(){
		if (!isset($this->url[0])) {
			include $this->controlerPath.$this->controlerName.".php";
			// include "app/controlers/Index.php";
			$this->contrler = new $this->controlerName();
		}else{
			$this->controlerName = $this->url[0];
			$filename =  $this->controlerPath.$this->controlerName.".php";
			if (file_exists($filename)) {
				include $filename;
				if (class_exists($this->controlerName)) {
					$this->contrler = new $this->controlerName();
				}else{

				}
			}
		}
	}
	public function callMethod(){
		if(!isset($this->url[2])) {
			$this->methodName = $this->url[1];
			if (method_exists($this->contrler, $this->methodName)) {
				$this->contrler->{$this->methodName}($this->url[2]);
			}else{
				header("Location:".BASE_URL."/Index")
			}
		}else{
			if (isset($this->url[1])) {
				$this->methodName = $this->url[1]; 
				if (method_exists($this->contrler, $this->methodName)) {
					$this->contrler->{$this->methodName}();
				}else{
					header("Location:".BASE_URL."/Index")
				}
			}else{ 

				if (method_exists($this->contrler, $this->methodName)) {
					$this->contrler->{$this->methodName}();
				}else{
					header("Location:".BASE_URL."/Index")
				}
			}
		}
	}
}