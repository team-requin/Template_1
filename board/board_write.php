<?php
$skin_dir = "../skin";
$img_dir = "../imgs";
include('../header.php');
?>
    <div id="board_write">
        <div>
            <div id="board_area">
                <form>
                    <table>
                        <tbody>
                            <tr id="board_title">
                                <th>제목</th>
                                <td><input type="text" placeholder="제목을 입력해주세요."></td>
                            </tr>
                            <tr id="board_input">
                                <th>글 쓰기</th>
                                <td><input type="text" placeholder="글을 쓰세요."></td>
                            </tr>
                            <tr id="board_option">
                                <td>
                                    비공개<input id="board_non" type="checkbox" value="비공개">
                                    <button id="board_check">확인</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div><!--옵션 제목 내용 링크-->

<?php
include('../footer.php');
?>