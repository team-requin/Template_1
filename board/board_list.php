<?php
$title = strtoupper($board);
include("header.php");

$result = mysqli_fetch_array(mysqli_query($connect, "select * from board where board='".$board."'"));
if(!$result[0]) {
	alert("존재하지 않는 게시판입니다");
	page("/");
}

$result = mysqli_query($connect, "select * from board_".$board);
$count = mysqli_num_rows($result);
$i = $count;
?>
	<div id="board_list">
		<div id="board_list_frame">
			<table id="board_list_table" cellpadding="0">
				<thead>
					<tr>
						<th class="list_tt_num">번호</th>
						<th class="list_tt_title">제목</th>
						<th class="list_tt_writer">글쓴이</th>
						<th class="list_tt_date">날짜</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td class="list_num"><?= $i ?></td>
						<td class="list_title"><a href="board.php?board=<?= $board ?>&bo_id=<?= $row['bo_id'] ?>"><?= $row['bo_title'] ?></a></td>
						<td class="list_writer"><?= $row['bo_writer'] ?></td>
						<td class="list_date"><?php
						$date = $row['bo_date'];
						$date = split(" ", $date);
						$date = $date[0];
						echo $date;
						?></td>
					</tr>
					<?php
					$i--;
					}
					?>
				</tbody>
			</table>
			<?php if($count == 0) { ?>
			<div id="board_list_nolist">
				<p>게시물이 존재하지 않습니다.</p>
			</div>
			<?php } ?>
			<script>
				
			</script>
			<div id="board_list_button">
				<a href="board_write.php?board=<?= $board ?>"><button>글쓰기</button></a>
			</div>
		</div>
	</div>