function header_btn_lgin() {
    alert('clicked1');
}
function header_btn_mypage() {
    alert('clicked2');
}
function header_btn_lgout() {
    alert('clicked3');
}
window.onload = () =>{
    let el = document.getElementsByClassName('list_title');
    el[0].addEventListener('click', () => {
        location.href = "/board/board_write.php";
    });
}