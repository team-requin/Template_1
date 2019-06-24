<?php
$skin_dir = "../skin";
$img_dir = "../imgs";
$title = strtoupper($_GET['board']);
include('header.php');

if(!login_check()) {
	alert("로그인부터 해주세요");
	page("/");
}

$result = mysqli_fetch_array(mysqli_query($connect, "select * from board where board='".$_GET['board']."'"));
if(!$result[0]) {
	alert("존재하지 않는 게시판입니다");
	page("/");
}

$title = $_POST['title'];
$text = $_POST['ir1'];
$link = $_POST['link'];
$secret = $_POST['hide'];
$date = date("Y-m-d H:i:s");
if($title != null && $text != null) {
	if(!$secret) $secret = "on";
	$result = mysqli_fetch_array(mysqli_query($connect, "select bo_id from board_".$_GET['board']." order by `bo_id` DESC"));
	$count = $result[0] + 1;
	$sql = "INSERT INTO board_notice VALUES (".$count.", '".$title."', '".$user_name."', '".$date."', '".$text."', '".$link."', '".$secret."')";
	mysqli_query($connect, $sql);
	alert("글이 등록 되었습니다");
	page("board.php?board=".$_GET['board']."&bo_id=".$count);
}
?>
    <div id="board_write">
        <form id="board_frame" method="POST">
            <table cellspacing="0" cellpadding="0">
                <tbody id="board_write_tbody">
                    <tr>
                        <th>제목</th>
                        <td><input id="board_title" name="title" type="text" placeholder="제목을 입력해주세요"></td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td>
                            <textarea name="ir1" id="ir1" class="nse_content"></textarea>
							<script type="text/javascript">
							var oEditors = [];
							nhn.husky.EZCreator.createInIFrame({
								oAppRef: oEditors,
								elPlaceHolder: "ir1",
								sSkinURI: "/plugins/Smart_Editor/SmartEditor2Skin.html",
								fCreator: "createSEditor2"
							});
							function submitContents(elClickedObj) {
								// 에디터의 내용이 textarea에 적용됩니다.
								oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
								// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.
								try {
									elClickedObj.form.submit();
								} catch(e) {}
							}
							</script>
                        </td>
                    </tr>
                    <tr>
                        <th>링크</th>
                        <td>
                            <input id="board_link" name="link" type="text" placeholder="링크를 입력해주세요">
                        </td>
                    </tr>
                    <tr>
                        <th>옵션</th>
                        <td>
                            <input id="board_check" type="checkbox" name="hide" value="on">
                            <label for="board_check">비공개</label>                        
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="board_button">
                <button onclick="submitContents()">작성완료</button>
                <button>취소</button>
            </div>
        </form>
    </div>
<?php
include('footer.php');
?>