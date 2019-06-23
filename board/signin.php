<?php
include("header.php");
?>  
    <div id="siin_container">
        <form id="siin_frm" name="siin_frm" method="POST" autocomplete="off">
            <fieldset class="login_form">
                <div class="id_area">
                    <div class="input_row" id="id_area">
                        <span class="input_box">
                            <label for="id" id="label_id_area" class="lbl">아이디</label>
                            <input type="text" id="id" class="int" name="id" placeholder="아이디" maxlength="40" value="">
                        </span>
                    </div>
                </div>
                <div class="pw_area">
                    <div class="input_row" id="pw_area">
                        <span class="input_box">
                            <label for="pw" id="label_pw_area" class="lbl">비밀번호</label>
                            <input type="password" id="pw" class="int" name="pw" placeholder="비밀번호" maxlength="16">
                        </span>
                    </div>
                </div>
                <!-- <script>
                    axios.get("http://10.156.147.139")
                    .then(res => {
                        console.log(res.data)
                    })
                </script> -->
                <input id="siin_btn" type="button" onclick="login()" title="로그인" value="로그인">
            </fieldset>
            <div id="gosignup">
                <a href="signup.php">회원가입</a>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<?php
include("footer.php");
?>