skrollr.init({
    smoothScrolling: false,
    forceHeight: true
});

var maxWidth = $(window).width();
var maxHeight = $(window).height();

$(document).ready(function(){
    $('.demo, .test, #section-one-left, #intro-video').css({
        width: maxWidth,
        height: maxHeight
    });
    $('.animsition').animsition();
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
        $('.test')[0].load();
       }
    });

    $("#section-one-continue").hide();
    $("#section-one-continue").delay(18000).fadeIn("slow");
    $("#intro-continue").hide();
    $("#intro-video").bind("ended", function() {
        $("#intro-continue").fadeIn("slow");
    });
});

 $( window ).resize(function() {
    var maxWidth = $(window).width();
    var maxHeight = $(window).height();
     $('.demo, .test').css({
            width: maxWidth,
            height: maxHeight
    });
});