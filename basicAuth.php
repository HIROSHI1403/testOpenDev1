<?php 
error_reporting(E_ALL & ~E_NOTICE);
// BASIC AUTH
define('USER', 'admin');
define('PASS', 'pass');

if (isset($_SESSION['basicAuth'])){
	header('Location: http://192.168.1.119/testOpenDev1/manage/managelogin.php');
}else{
	$realm="test";
	$user = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
	$pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
	$ok_auth = false;
	
	if($user === USER && $pass === PASS) {
		$ok_auth = true;
		$_SESSION['basicAuth'] = "ok";
		header('Location: http://192.168.1.119/testOpenDev1/manage/managelogin.php');
		exit();
	} else {
		header("HTTP/1.0 401 Unauthorized");
		header("WWW-authenticate: basic realm=\"$realm\"");
		echo '認証失敗...';
		exit();
	}	
}
?>