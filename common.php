<?php
session_start();
error_reporting(0);
echo "<meta charset=\"UTF-8\">";

//Connect database
$connect = mysqli_connect("10.156.147.149", "root", "dladydtjdtjd1", "template_1");
mysqli_query($connect, "SET NAMES utf8");
mysqli_query($connect, "set session character_set_connection=utf8");
mysqli_query($connect, "set session character_set_results=utf8");
mysqli_query($connect, "set session character_set_client=utf8");

//Check user login
$id = $_SESSION['user_id'];
$pw = $_SESSION['user_pw'];
$user = mysqli_fetch_array(mysqli_query($connect, "select * from users where user_id='".$id."' and user_pw='".md5($pw)."'"));
function login_check() {
	if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw']) || $user[0] == null || preg_match('/\'|\"|\`|	| |\||[!#$%^&*()?+=\/]/i', $id) || preg_match('/\'|\"|\`|	| |\|/i', $pw)) {
		return false;
	}
	return true;
}

//User Info
if($user[0] == null) {
	$user_lv = 0;
} else {
	$user_id = $user['user_id'];
	$user_pw = $user['user_pw'];
	$user_lv = $user['user_level'];
	$user_name = $user['user_name'];
	$user_per = $user['user_per'];
	$user_ip = $user['user_ip'];
}

//Alert Function
function alert($text) {
	if($text == null) {
		echo "<script>alert('Test');</script>";
		return;
	}
	echo "<script>alert('".$text."');</script>";
}

//Change Page Function
function page($page) {
	echo '<script>window.location.href="'.$page.'"</script>';
}
?>