<?php
$title = "게시글";
include("header.php");

$result = mysqli_fetch_array(mysqli_query($connect, "select * from board_".$board." where bo_id=".$bo_id));
if(!$result[0]) {
	alert("존재하지 않는 게시판입니다");
	page("/");
}
?>
<div id="bo_v_container">
	<article id="bo_v">
		<header><h1 id="bo_v_title"><?= $result['bo_title'] ?></h1></header>
		<div id="bo_v_if">
			<section id="bo_v_info">
				작성자 <strong><span class="sv_member"><?= $result['bo_writer'] ?></span></strong>
				<span class="sound_only">작성일</span>
				<strong><?= $result['bo_date'] ?></strong>
				<span class="if_r">
					댓글<strong>0건</strong>
				</span>
			</section>
		</div>

		<div id="bo_v_top">
			<ul class="bo_v_nb">
				<li><a class="btn_b01">다음글</a></li>
			</ul>
			<ul class="bo_v_com">
				<li><a class="btn_b01">수정</a></li>
				<li><a class="btn_b01">삭제</a></li>
				<li><a class="btn_b01">목록</a></li>
				<li><a class="btn_b02">글쓰기</a></li>
			</ul>
		</div>

		<section id="bo_v_atc">
			<div id="bo_v_con">
				<?= $result['bo_text'] ?>
			</div>
		</section>
		
		<section id="bo_vc">
			<h2>댓글목록</h2>
				<div id="bo_vc_comment">
					<header>
						<span>작성자 이름</span>
						작성일<time>19-06-21 11:12</time>
					</header>
					<p>댓글</p>
				</div>
				<p id="bo_vc_empty">등록된 댓글이 없습니다.</p>
		</section>

		<aside id="bo_vc_w">
			<h2>댓글쓰기</h2>
			<form name="fviewcomment" autocomplete="off">
				<div class="tbl_wrap tbl_cmt">
				<table>
				<tbody>
				<tr>
					<th scope="row">내용</th>
					<td colspan="5">
						<div id="wr_container">
							<textarea id="wr_content" name="wr_content" maxlength="10000" required="" class="required" title="내용"></textarea>
							<div class="btn_confirm">
								<input type="submit" id="btn_submit" class="btn_submit" value="댓글등록">
							</div>
						</div>
						<div class="cmt_scr"><input type="checkbox" name="wr_secret" value="secret" id="wr_secret"><label for="wr_secret">비밀글사용</label></div>
						
					</td>
				</tr>
				</tbody>
				</table>
				</div>
			</form>
		</aside>
	</article>
</div>