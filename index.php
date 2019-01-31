<?php 

include "app/config/config.php";

spl_autoload_register(function($class){


	$dirs = array(
        'system/main/', // Project specific classes (+Core Overrides)
        'system/libs/', // Core classes example
    );


	$locationOne = "system/libs/".$class.".php";
	$locationTwo = "".$class.".php";

	foreach( $dirs as $dir ) {
        if (file_exists($dir.$class.'.php')) {
            require_once($dir.$class.'.php');
        }
    }


});

// spl_autoload_register(function($class){
// 	include_once "system/main/".$class.".php";
// 	echo "$class";
// });

// foreach (glob('system/main/*.php') as $filename) {
// 	require "$filename" ; 
// }

$main = new Main();

?>



<?php

// $url = isset($_GET['url']) ? $_GET['url'] : NULL;
// if ($url != NULL ) {
// 	$url = rtrim($url,'/');
// 	$url = explode("/", filter_var($url,FILTER_SANITIZE_URL));
// }else{
// 	unset($url);
// }



// if (isset($url[0])) {

// 	include "app/controlers/".$url[0].".php";
// 	$ma = new $url[0]();
// 	if (isset($url[2])) {
// 		$ma->{$url[1]}($url[2]); 
// 	}else{
// 		if (isset($url[1])) {
// 			$ma->{$url[1]}(); 
// 		}else{ }
// 	}
// }else{
// 	include "app/controlers/Index.php";
// 	$ma = new Index();
// 	$ma->home();
	 
// }

































// echo $controller = $url[0]."<br>";
// echo $method = $url[1]."<br>";
// echo $param = $url[2]."<br>";

