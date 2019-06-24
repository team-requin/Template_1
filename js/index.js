function login() {
    var id = document.getElementById("id");
    var pw = document.getElementById("pw");
    var userdata = {
        "id": id.value,
        "pw": pw.value // 8426753190
    };
    axios.post("http://10.156.147.149:1219", userdata)
    .then(() => { // .then(user)
        // console.log(user.data.access_token);
        alert('로그인 성공');
        location.href = "/";
        document.getElementById('header').addEventListener('load', 
        );
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

/****** HTTP request 만드는 방법 ******/
/*
//* ajax, XMLHttpRequest를 이용한 통신
//* 서버에 요청하기에 앞서, 서버로 보낸 요청에 대한 응답을 받았을 때
//* 어떤 행동을 할 것인지 정해야 합니다.

1-1. httpRequest.onreadystatechange = nameOfTheFunction;
1-2. httpRequest.onreadystatechange = function() {
    /* 서버에 대한 응답을 따른 로직을 여기에 작성해도 됩니다.
}

 *  동작을 결정 한 뒤에, 요청을 합니다. Http request 객체의
 *  open()과 send()를 사용해서 요청합니다.

/**** open()의 파라미터
/****** 첫 번째 파라미터 -> 'GET'
/* HTTP 요구 방식 -- GET, POST, HEAD 중 하나입니다.
/* 표준에 따라 모두 대문자로 표기해야 합니다.
/****** 두 번째 파라미터 -> 'http://www.naver.com'
/* 요구하고자하는 URL
/****** 세 번째 파라미터(생략 가능) -> true
/* 요구가 비동기식으로 수행될 지를 결정합니다.
/* true(기본값) => 함수가 지속적으로 수행될 수 있다. 비동기적
/* false => send()함수에서 서버에 응답이 올 때까지 기다린다. 동기적
2-1. httpRequest.open('GET', 'http://www.naver.com', true);

/**** send()의 파라미터
/****** POSt
/* 서버로 보내고 싶은 어떠한 데이터라도 가능합니다.
/* send()를 호출 하기 전에 send()로 보낼 쿼리를 이용해야 합니다.
2-2. httpRequest.send(null);
*/

/****** 서버 응답에 대한 처리 ******/
/*
 *  밑의 함수에서는 요구의 상태값을 검사할 필요가 있습니다.
/* httpRequest.onreadystatechange = nameOfTheFunction; 
/* 만약 상태값이  XMLHttpRequest.DONE라면
/* 서버로부터 모든 응답을 받았고 처리할 준비가 됬음을 뜻합니다.
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        /* 이상 없음, 응답 받았음
    } else {
        /* 아직 준비되지 않음
    }

/* readyState 가 가질 수 있는 모든 값의 목록은 
/* XMLHTTPRequest.readyState에 작성되어있으며 아래와 같습니다:
    0 (uninitialized) - (request가 초기화되지 않음)
    1 (loading) - (서버와의 연결이 성사됨)
    2 (loaded) - (서버가 request를 받음)
    3 (interactive) - (request(요청)을 처리하는 중)
    4 (complete) - (request에 대한 처리가 끝났으며 응답할 준비가 완료됨)

/* 
if (httpRequest.status === 200) {
    /* 이상 없음!
} else {
    /* 요구를 처리하는 과정에서 문제가 발생되었음
    /* 혹은 500 (Internal Server Error) 이 될 수 있음
    /* 예를 들어 응답 상태 코드는 404 (Not Found) 이거나
}









*/