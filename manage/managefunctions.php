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

echo <<< EOT
	<style>
		body { padding-top: 51px; }
	</style>
EOT;

function rewrite($var){
	$ver=null;
}

function manage_login($manage_id,$manage_pass){

	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;

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

function RUN_SQLI_DEFAULTLOGIN($SQL_STR,$USERNAME){
	if (!isset($SQL_STR)) {
		return $msg_row['3']['0'];
	}
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	return $mysqli->query($SQL_STR);
}


function manage_counter($select_category){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;

	$today = date('Y-m-d');
	
	switch ($select_category){
		case "user":
				$query_str_manage_countuser = "SELECT COUNT(no) FROM user";
				$manage_result_countuser = $mysqli->query($query_str_manage_countuser);
				$user_num = $manage_result_countuser->fetch_all();
				return $user_num['0']['0'];
			break;
		case "comp":
				$query_str_manage_countercomp = "SELECT COUNT(comp_id) FROM comp_info";
				$manage_result_countcomp = $mysqli->query($query_str_manage_countercomp);
				$comp_num = $manage_result_countcomp->fetch_all();
				return $comp_num['0']['0'];
			break;
		case "job":
				$query_str_manage_countjob = "SELECT COUNT(job_info_id) FROM job_info";
				$manage_result_countjob = $mysqli->query($query_str_manage_countjob);
				$job_num = $manage_result_countjob->fetch_all();
				return $job_num['0']['0'];
			break;
		case "cal":
				$query_str_manage_countcal = "SELECT COUNT(cal_id) FROM calData WHERE cal_date >= '{$today}'";
				$manage_result_countcal = $mysqli->query($query_str_manage_countcal);
				$cal_num = $manage_result_countcal->fetch_all();
				return $cal_num['0']['0'];
			break;
	}
}











?>
