<?php

$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';

$host  = $_SERVER['HTTP_HOST'];

$host_upper = strtoupper($host);

$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$baseurl = $protocol.$host.$path;

$admin_baseurl = $baseurl.'/app/view/admin' ;

$template_css_js_url = $baseurl.'/app/view/template' ;
// define('PATH_NAME', $path);
define('BASE_URL', $baseurl);
// admin base url 
define('ADMIN_BASE_URL', $admin_baseurl);
// TEMPLATE_CSS_JS_URL 
define('TEMPLATE_CSS_JS_URL', $template_css_js_url );
$dirname = '../'.dirname(__FILE__);
define('MAIN_DIR_NAME', $dirname );


define('TABLE_USER', 'user' );
define('TABLE_POST', 'post' );
define('TABLE_PRODUCT', 'product' );
define('TABLE_CATEGORY', 'category' );
define('TABLE_BRANDS', 'brands' );
define('TABLE_CART', 'tbl_cart' );

