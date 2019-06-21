<?php
$skin_dir = "../skin";
$img_dir = "../imgs";
include('header.php');
?>
    <div id="board_write">
        <form id="board_frame">
            <table cellspacing="0" cellpadding="0" >
                <tbody id="board_write_tbody">
                    <tr>
                        <th>제목</th>
                        <td><input id="board_title"type="text" placeholder="제목을 입력해주세요"></td>
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
                            <input id="board_link"type="text" placeholder="링크를 입력해주세요">
                        </td>
                    </tr>
                    <tr>
                        <th>옵션</th>
                        <td>
                            <input id="board_check" type="checkbox" value="board_check">
                            <label for="board_check">비공개</label>                        
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="board_button">
                <button>작성완료</button>
                <button>취소</button>
            </div>
        </form>
    </div>
<?php
include('footer.php');
?>