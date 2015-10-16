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
});

 $( window ).resize(function() {
    var maxWidth = $(window).width();
    var maxHeight = $(window).height();
 $('.demo').css({
        width: maxWidth,
        height: maxHeight
});
});