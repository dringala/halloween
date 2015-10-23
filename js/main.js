skrollr.init({
    smoothScrolling: true,
    forceHeight: true
});

var maxWidth = $(window).width();
var maxHeight = $(window).height();

$(document).ready(function() {
    $('.demo, .test, #section-one-left, #intro-video').css({
        width: maxWidth,
        height: maxHeight
    });
    $('.animsition').animsition();
    $('.test').hide();

    if($('.test').length > 0) {
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                $('.test')[0].play();
            }
        });
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
                $('.test').show();
            } else {
                $('.test').hide();
                $('.test')[0].load();
            }
        });
    }

    $('.writer').hide();

    if($('.writer').length > 0) {
        $(window).scroll(function() {
            if (document.documentElement.clientHeight + $(document).scrollTop() >= document.body.offsetHeight) {
                    disableScroll();
                    $('.writer').fadeIn();
                    var $el = $('.writer'),
                        txt = $el.text(),
                        txtLen = txt.length,
                        timeOut,
                        char = 0;

                    $el.text('|');

                    (function typeIt() {   
                        var humanize = Math.round(Math.random() * (200 - 30)) + 30;
                        timeOut = setTimeout(function() {
                            char++;
                            var type = txt.substring(0, char);
                            $el.text(type + '|');
                            typeIt();

                            if (char == txtLen) {
                                $el.text($el.text().slice(0, -1)); // remove the '|'
                                clearTimeout(timeOut);
                            }

                        }, humanize);
                    }());
            }
            else {
                  $('.writer').hide();
            }
        });

    }
    $("#section-one-continue").hide();
    $("#section-one-continue").delay(18000).fadeIn("slow");
    $("#intro-continue").hide();
    $("#intro-video").bind("ended", function() {
        $("#intro-continue").fadeIn("slow");
    });



});



function disableScroll() {
    $('body').on('scroll touchmove mousewheel', function(e){
      e.preventDefault();
      e.stopPropagation();
      return false;
    });
}

$(window).resize(function() {
    var maxWidth = $(window).width();
    var maxHeight = $(window).height();
    $('.demo, .test').css({
        width: maxWidth,
        height: maxHeight
    });
});


