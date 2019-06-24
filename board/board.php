<?php
include("common.php");

$board = $_GET['board'];
$bo_id = $_GET['bo_id'];

if($board == null) {
	alert("게시판이 존재하지 않습니다");
	page("/");
}
if($bo_id == null) {
	include("board_list.php");
} else {
	include("board_view.php");
}

include("footer.php");
?>