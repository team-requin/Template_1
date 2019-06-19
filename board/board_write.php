<?php
$skin_dir = "../skin";
$img_dir = "../imgs";
include('../header.php');
?>
    <div id="board_write">
        <form id="board_frame">
            <table cellspacing="0" cellpadding="0">
                <tbody id="board_tbody">
                    <tr>
                        <th>제목</th>
                        <td><input id="board_title"type="text" placeholder="제목을 입력해주세요"></td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td><pre>내용</pre></td>
                    </tr>
                    <tr>
                        <th>옵션</th>
                        <td>
                            <input id="board_link"type="text" placeholder="링크를 입력해주세요">
                            <input id="board_check" type="checkbox" value="board_check">
                            <label for="board_check">비공개</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
<?php
include('../footer.php');
?>