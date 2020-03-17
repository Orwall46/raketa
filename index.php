<?php 

if ($_SERVER['REQUEST_URI'] == '/') {
	$Page = 'index';
	$Module = 'index';
} else {
	$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$URL_Parts = explode('/', trim($URL_Path, ' /'));
	$Page = array_shift($URL_Parts);
	$Module = array_shift($URL_Parts);
	
	if (!empty($Module)) {
		$Param = array();
		for ($i = 0; $i < count($URL_Parts); $i++) {
			$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
		}
	}
}


function NotFound(){
	header('HTTP/1.0 404 Not Found');
	exit(include_once("404.php")); 
}
/* Главные страницы*/
if ($Page == 'index') include_once ('home.php');
if (in_array($Page, array('index', 'home', 'login', 'avatar', 'signup', 'registration', 'logout', 'project', 'about', 'my', 'support', 'reset_password', 'editmy', 'send_link_reset_password','captcha', 'set_new_password', 'update_password', 'db', 'dbconnect', 'function', 'users', 'update_my_edit', 'editavatar', 'payment', 'set_new_password', 'search', 'zapros_na_vivod', 'history', 'privacy', 'term_of_use', 'rules', 'faq', 'buy', 'registdream', 'update_registdream', 'registdream2', 'enddream2', 'dreamcomes', 'free', 'freeb', 'game'))) include_once("$Page.php");


/* Страницы оплаты */

else if (in_array($Page, array('yes', 'ups'))) include_once("payments/$Page.php");

else NotFound();


?>