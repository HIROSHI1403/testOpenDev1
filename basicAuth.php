<?php 
error_reporting(E_ALL & ~E_NOTICE);
// BASIC AUTH
define('USER', 'admin');
define('PASS', 'pass');

if (isset($_SESSION['basicAuth'])){
	header('Location: http://192.168.1.119/testOpenDev1/main/top.php');
}else{
	$realm="test";
	$user = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
	$pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
	$ok_auth = false;
	
	if($user === USER && $pass === PASS) {
		$ok_auth = true;
		$_SESSION['basicAuth'] = "ok";
		header('Location: http://192.168.1.119/testOpenDev1/main/top.php');
		exit();
	} else {
		header("HTTP/1.0 401 Unauthorized");
		header("WWW-authenticate: basic realm=\"$realm\"");
		echo '認証失敗...';
		exit();
	}	
}


// $user='admin';
// $password='pass';

// if (!isset($_SERVER['PHP_AUTH_USER'])){
// 	header('WWW-Authenticate: Basic realm="Private Page"');
// 	header('HTTP/1.0 401 Unauthorized');
// 	header('Content-Type: text/plain; charset=utf-8');
// 	$_SESSION['lh_basicAuth_err']=1;
// 	echo 'ログインに失敗しました。メールからログイン情報を再度確認ください。'.$_SESSION['lh_basicAuth_err'];
// // 	header('Location: http://localhost/testOpenDev1/index.php');
// 	die();
// }else{
// 	if($_SERVER['PHP_AUTH_USER'] != $user
// 			|| $_SERVER['PHP_AUTH_PW'] != $password){
// 		header('WWW-Authenticate: Basic realm="Private Page"');
// 		header('HTTP/1.0 401 Unauthorized');
// 		header('Content-Type: text/plain; charset=utf-8');
		
// 		$_SESSION['lh_basicAuth_err']=2;
// 		echo 'ログインに失敗しました。メールからログイン情報を再度確認ください。'.$_SESSION['lh_basicAuth_err'];
// 		//	header('Location: http://localhost/testOpenDev1/index.php');
// 		die();
// 	}
// }
// $_SESSION['lh_basicAuth_err']=3;
// echo '認証しました。'.$_SESSION['lh_basicAuth_err'];
// die();
//header('Location: http://localhost/testOpenDev1/top.php');

?>