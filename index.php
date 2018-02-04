<?php 
// spl_autoload_register(function($class){
// include_once "system/libs/".$class.".php";

// });
include_once "system/libs/Dcontrolar.php";
include_once "system/libs/Load.php";
include_once "system/libs/Dmodel.php";
include_once "system/libs/Database.php";



// include_once "app/controlers/Mamun.php";

?>
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
		$ma->$url[1]($url[2]); 
	}else{
		if (isset($url[1])) {
			$ma->$url[1](); 
		}else{ }
	}
}else{
	include "app/controlers/Index.php";
	$ma = new Index();
	$ma->home();
	echo "12 no tutorial <br>" ;
}

































// echo $controller = $url[0]."<br>";
// echo $method = $url[1]."<br>";
// echo $param = $url[2]."<br>";

