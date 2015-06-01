<?php
if (empty($_SESSION['basicAuth'])){
	header("Location: {$rootURL}basicAuth.php");
}

require_once '../functions.php';

if (empty($_SESSION['admin_login_name'])){
	$_SESSION['ERR_LOGIN'] = "ログインしてください。";
	header("Location: {$rootURL}jobSlipManage_login.php");
}else {
	echo "good login job slip manages";
}