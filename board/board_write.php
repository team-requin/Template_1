<?php
$skin_dir = "../skin";
$img_dir = "../imgs";
include('header.php');
?>
    <div id="board_write">
        <form id="board_frame">
            <table cellspacing="0">
                <tbody id="board_tbody">
                    <tr>
                        <th>제목</th>
                        <td>제목 공간</td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td>내용 공간</td>
                    </tr>
                    <tr>
                        <th>옵션</th>
                        <td>링크, 비공개 책박</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <!--옵션 제목 내용 링크-->
<?php
include('footer.php');
?>