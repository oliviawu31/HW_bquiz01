// JavaScript Document
$(document).ready(function (e) {
    $(".main_menu").mouseover(function () {
        $(this).children(".mw").stop().show();
    });
    $(".main_menu").mouseout(function () {
        $(this).children(".mw").hide();
    });
});
function lo(x) {
    location.replace(x);
}
function op(x, y, url) {
    $(x).fadeIn();
    if (y) $(y).fadeIn();
    if (y && url) $(y).load(url);
}
function cl(x) {
    $(x).fadeOut();
}

function logout() {
    $.get('api/logout.php', function(){
        location.href='index.php?do=login'
    })
}
