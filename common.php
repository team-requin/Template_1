<?php
session_start();
echo "<meta charset=\"UTF-8\">";

//Connect database
$connect = mysqli_connect("localhost", "root", "dladydtjdtjd1", "template_1");
mysqli_query($connect, "SET NAMES utf8");
mysqli_query($connect, "set session character_set_connection=utf8");
mysqli_query($connect, "set session character_set_results=utf8");
mysqli_query($connect, "set session character_set_client=utf8");

//Check user login
$id = $_SESSION['user_id'];
$pw = $_SESSION['user_pw'];
function login_check() {
	if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
		echo "<script>alert('로그인후 이용 가능합니다');window.location.href='/';</script>";
		return false;
	}
	$result = mysqli_fetch_array(mysqli_query(db(), "select * from users where user_id='".$id."' and user_pw='".md5($pw)."'"));
	if($result[0] == null) {
		echo "<script>alert('인증에 실패했습니다\\n다시 로그인 해주세요');window.location.href='".$pg_path."/board/logout.php';</script>";
		return false;
	}
	return true;
}

$user = mysqli_fetch_array(mysqli_query(db(), "select * from `users` where user_id='".$id."' and user_pw='".md5($pw)."'"));
if($user[0] == null) {
	$user_lv = 0;
} else {
	$user_id = $user['user_id'];
	$user_pw = $user['user_pw'];
	$user_lv = $user['user_level'];
	$user_name = $user['user_name'];
}
?>