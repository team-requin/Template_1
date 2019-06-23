<?php
include("header.php");
?>  
    <div id="siup_container">
        <form id="siup_frm" name="siup_frm" method="POST" autocomplete="off">
            <fieldset class="login_form">

                <div class="name_area">
                    <div class="input_row" id="id_area">
                        <span class="input_box">
                            <label for="name" id="label_name_area" class="lbl">이름</label>
                            <input type="text" id="name" class="int2" name="name" placeholder="이름" maxlength="40" value="">
                        </span>
                    </div>
                </div>

                <div class="id_area">
                    <div class="input_row" id="id_area">
                        <span class="input_box">
                            <label for="id1" id="label_id_area" class="lbl">아이디</label>
                            <input type="text" id="id1" class="int2" name="id1" placeholder="아이디" maxlength="40" value="">
                        </span>
                    </div>
                </div>

                <div class="pw_area">
                    <div class="input_row" id="pw1_area">
                        <span class="input_box">
                            <label for="pw1" id="label_pw1_area" class="lbl">비밀번호</label>
                            <input type="password" id="pw1" class="int2" name="pw1" placeholder="비밀번호" maxlength="16">
                        </span>
                    </div>
                </div>
                <div class="pw_area">
                    <div class="input_row" id="pw2_area">
                        <span class="input_box">
                            <label for="pw2" id="label_pw2_area" class="lbl">비밀번호 확인</label>
                            <input type="password" id="pw2" class="int2" name="pw2" placeholder="비밀번호 확인" maxlength="16">
                        </span>
                    </div>
                </div>

                <input id="siup_btn" type="button" onclick="signup()" title="로그인"value="로그인">
            </fieldset>
        </form>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<?php
include("footer.php");
?>