<html>
<head>
	<meta charset="UTF-8">
    <title>Title</title>
	<style>
		@import url(<?php echo $skin_dir; ?>/default.css) screen and (min-width: 950px);
		@import url(<?php echo $skin_dir; ?>/mobile.css) screen and (max-width: 950px);
	</style>
</head>
</body>

    <div id="header">
        <div id="only_header">
            <div>
                <div id="header_button">
                    <a href="#"><button>로그인</button></a>
                    <a href="#"><button>마이페이지</button></a>
                    <a href="#"><button>로그아웃</button></a>
                </div>
            </div>
            <div id="header_menu">
                <img src="<?php echo $img_dir; ?>/title_logo.png" />
                <ul>
                    <div>
                        <a href="#"><span>커뮤니티</span></a>
                        <ul>
                            <a href="#"><li>공지사항</li></a>
                            <a href="#"><li>자유 게시판</li></a>
                        </ul>
                    </div>
                    <div>
                        <a href="#"><span>자료실</span></a>
                        <ul>
                            <a href="#"><li>다운로드</li></a>
                        </ul>
                    </div>
                </ul>
            </div>
            <div id="header_text">
                <span>공지사항</span>
            </div>
        </div>
    </div>