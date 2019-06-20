<?php
include("header.php");

$result = mysqli_fetch_array(mysqli_query($connect, "select * from board where board_id='".$board."'"));
if(!$result[0]) {
	alert("존재하지 않는 게시판입니다");
	page("/");
}
?>
	<div id="board_list">
		<div id=""></div>
	</div>