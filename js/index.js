function login() {
    var id = document.getElementById("id");
    var pw = document.getElementById("pw");
    var userdata = {
        "id": id.value,
        "pw": pw.value // 8426753190
    };
    axios.post("/only_header.php", userdata)
    .then((user) => {
        console.log(user.data.access_token);
        alert('로그인 성공');
        // location.href = '/';
        // var cat = localStorage.setItem("id", "sook7836")
    })
    .catch(() => {
        alert('계정이 일치하지 않습니다.');
        id.value = "";
        pw.value = "";
    });
}
function test1() {
    axios.get('/only_header.php')
        .then(() => {
            console.log('1');
        })
}

function signup() {
    // var name = document.getElementById('name');
    var id = document.getElementById('id1');
    var pw = document.getElementById('pw1');
    // var pw2 = document.getElementById('pw2');

    var userdata = {
        "id": id.value,
        "pw": pw.value,
    }
    axios.post("http://10.156.147.139/user/register", userdata)
    .then(() => {
        alert('회원가입 성공');
        location.href = '/';
    })
    .catch(() => {
        alert('회원가입 실패');
        id.value = "";
        pw.value = "";
    })
}


document.getElementById('lg_btn').addEventListener('click', function () {
    location.href = '/board/signin.php';
});
