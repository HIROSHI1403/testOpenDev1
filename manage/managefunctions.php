<?php

ini_set('display_errors', 'Off');

$rootURLmanage = "http://192.168.1.119/testOpenDev1/manage/";
$rootURL = "http://192.168.1.119/testOpenDev1/";
$mySQLAddress = "localhost";
$mainDbUserName = "root";
$mainDbPass = "pass";
$mainDbName = "testOpenDev1_db";

if (empty($_SESSION['basicAuth'])){
	header("Location: {$rootURL}basicAuth.php");
}

if (strstr($_SERVER["REQUEST_URI"], 'managelogin.php')){
	if (!isset($_SESSION)){
		session_start();
	}
}else {
	if (!isset($_SESSION))
	if (!isset($_SESSION)){
		session_start();
		header("Location:{$rootURLmanage}managelogin.php");
	}elseif (!isset($_SESSION['USERNAME'])){
		header("Location:{$rootURLmanage}managelogin.php");
	}
}

$mysqli = new mysqli($mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName);
if ($mysqli->connect_error){
	$mysqli->close();
	exit();
}

$query_str_msg = "SELECT msg FROM msg";
$msg_result = $mysqli->query($query_str_msg);
if (!$msg_result){
	exit();
}else {
	$msg_row = $msg_result->fetch_all();
}

function rewrite($var){
	$ver=null;
}

function manage_login($manage_id,$manage_pass){
	
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	global $rootURLmanage;
	global $mysqli;
	global $msg_row;
	
	$query_str_managelogin = "SELECT * FROM admin_user WHERE admin_un = '".$manage_id."'";
	$manage_result = $mysqli->query($query_str_managelogin);
	if (!$manage_result){
		exit();
	}else {
		while ($manage_row = $manage_result->fetch_assoc()){
			if (password_verify($manage_pass, $manage_row['admin_pw'])){
				return $msg_row['1']['0'];
				exit();
			}else {
				return $msg_row['3']['0'];
				exit();
			}
		}
	}
	
}

function manage_conter(){
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	global $rootURLmanage;
	global $mysqli;
	global $msg_row;
	
	
	
}

















?>