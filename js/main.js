skrollr.init({
    smoothScrolling: true,
    forceHeight: true
});

var maxWidth = $(window).width();
var maxHeight = $(window).height();

// var creditHeight = ($('#credits').height());
function creditsText() {
    $('#credits').css('top', '');
    $('#credits').animate({top:"-200%"}, 23000, function() {
         $('#end-replay').fadeIn();
    });
}

function callCredits() {
    $('.thisdiv').fadeIn("slow", function() {
        $('#credits').fadeIn("slow");
        $('audio').prop('muted', true);
        creditsText();
    });    
}
function disableScroll() {
    $(document).on('scroll touchmove mousewheel DOMMouseScroll', function(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    });
}

$(document).ready(function() {

    $('.thisdiv').hide();
    $('.demo, .test, #section-one-left, #section-one-right, #intro-video, #section-two-left,  #section-two-right, .thisdiv, #instructions').css({
        width: maxWidth,
        height: maxHeight
    });
    $('.animsition').animsition();
    $('.test').hide();
    $('#end-replay').hide();
    // $('.end-video').hide();    

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
    if($('#instructions').length > 0) {   
        $('.instruction-close').on('click', function() {
            $('#instructions').fadeOut(function() {
                $('#intro-video')[0].play();
            });
        });
        $("#intro-video").bind("ended", function() {
            $("#intro-continue").fadeIn("slow");
        });        
    }


    $('#writer').hide();
    if($('#writer').length > 0) {
        $(window).scroll(function() {
            if  ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                disableScroll();
                $('#computer')[0].play();              
                $('.end-video').css("z-index", "0");
                    // trigger first video 
                    // after 7/8 seconds start typing
                $("#computer").bind("ended", function() {
                    callCredits();
                });
            }
            else {
                  $('#writer').hide();
                  $('#computer')[0].load();
            }
        });
        var clearIn = setInterval(function() {
            var current = $('#computer').get(0).currentTime;
                if(current > 6) {
                    typingText();
                    clearInterval(clearIn);
                } 
        },1000);         
    }
    if($('#section-one-right').length > 0) {
        $("#section-one-right-continue").hide();
            var clearIn = setInterval(function() {
            var current = $('#section-one-right').get(0).currentTime;
                if(current > 22) {
                    $("#section-one-right-continue").fadeIn("slow");
                } 
        },1000); 
    }

    if($('#section-one-left').length > 0) {
            $("#section-one-left-continue").hide();
            var clearIn = setInterval(function() {
            var current = $('#section-one-left').get(0).currentTime;
                if(current > 18) {
                    $("#section-one-left-continue").fadeIn("slow");
                } 
        },1000); 
    }
    if($('#section-two-left').length > 0) {
            $("#section-two-left-continue").hide();
            var clearIn = setInterval(function() {
            var current = $('#section-two-left').get(0).currentTime;
                if(current > 28) {
                    $("#section-two-left-continue").fadeIn("slow");
                } 
        },1000); 
    }    
    if($('#section-two-right').length > 0) {
            $("#section-two-right-continue").hide();
            var clearIn = setInterval(function() {
            var current = $('#section-two-right').get(0).currentTime;
                if(current > 26) {
                    $("#section-two-right-continue").fadeIn("slow");
                } 
        },1000); 
    }       
         
    $("#intro-continue, .thisdiv").hide();

});



$(window).resize(function() {
    var maxWidth = $(window).width();
    var maxHeight = $(window).height();
    $('.demo, .test').css({
        width: maxWidth,
        height: maxHeight
    });
});

function typingText() {
    $('#writer').fadeIn();

    (function type() {
        text = str.slice(0, ++i);
        if (text === str) {
          $('#writer').delay(4000).fadeOut();
            return 
            };
        
        document.getElementById('writer').innerHTML = text;

        var char = text.slice(-1);
        if( char === '<' ) isTag = true;
        if( char === '>' ) isTag = false;

        if (isTag) return type();
        setTimeout(type, 130);
    }());
}

