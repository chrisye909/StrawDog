$(function () {
    locateLoginBox();
});
function locateLoginBox(){
    var width = $(window).width();
   if (width > 1280) {
        new_width = (width - 1280)/2 + 40;
        $('div.login-box').css('margin-right',new_width + 'px');
   }
}
$(window).resize(function(){
   locateLoginBox();
});