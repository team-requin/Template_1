<?php
include("common.php");

$board = $_GET['board'];
$board_id = $_GET['board_id'];

if($board == null) {
	alert("게시판이 존재하지 않습니다");
	page("/");
}
if($board_id == null) {
	include("board_list.php");
} else {
	include("board_view.php");
}

include("footer.php");
?>