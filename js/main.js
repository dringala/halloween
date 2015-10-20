skrollr.init({
    smoothScrolling: false,
    forceHeight: true
});

var maxWidth = $(window).width();
var maxHeight = $(window).height();

$(document).ready(function(){
    $('.demo').css({
        width: maxWidth,
        height: maxHeight
    });
   $('.test').hide();

    $(window).scroll(function() {
       if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
        $('.test')[0].play();
       }
    });
    $(window).scroll(function() {
       if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
        $('.test').show();
       }
       else {
        $('.test').hide();
       }
    });

});

 $( window ).resize(function() {
    var maxWidth = $(window).width();
    var maxHeight = $(window).height();
 $('.demo').css({
        width: maxWidth,
        height: maxHeight
});
});