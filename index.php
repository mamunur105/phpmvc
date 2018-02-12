<?php 
spl_autoload_register(function($class){
	include_once "system/libs/".$class.".php";
});?>


<?php

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if ($url != NULL ) {
	$url = rtrim($url,'/');
	$url = explode("/", filter_var($url,FILTER_SANITIZE_URL));
}else{
	unset($url);
}



if (isset($url[0])) {

	include "app/controlers/".$url[0].".php";
	$ma = new $url[0]();
	if (isset($url[2])) {
		$ma->{$url[1]}($url[2]); 
		// echo $url[1]. $url[2];
	}else{
		if (isset($url[1])) {
			$ma->{$url[1]}(); 
		}else{ }
	}
}else{
	include "app/controlers/Index.php";
	$ma = new Index();
	$ma->home();
	 
}

































// echo $controller = $url[0]."<br>";
// echo $method = $url[1]."<br>";
// echo $param = $url[2]."<br>";

