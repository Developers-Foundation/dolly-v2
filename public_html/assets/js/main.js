
var RESIZED = true;
var TOPS = [];

$(function jQueryResize (){
    $(window).resize(function(){
        RESIZED = true;
        fixNavTab();
    });
    fixNavTab();
});

function fixNavTab(){
    $('.navtab').css('top', String($('.navbar-fixed-top')[0].offsetHeight - (17 - $(window).width() /150)) + "px");
}

function bolden(num){
    for(var i = 1; i < 7; i++){
        if(i <= num){
            /*$('#impact-' + i).css({
                'border-color': 'rgb(74, 144, 226)',
                'color': 'rgb(74, 144, 226)'
            });*/
            $('#li-impact-' + i).addClass("selected");
        } else{
            /*$('#impact-' + i).css({
                'border-color': 'white',
                'color': 'white'
            });*/
            $('#li-impact-' + i).removeClass("selected");
        }
    }
}

function scrollEvent() {
    if(RESIZED){
        TOPS = [];
        for(var i = 1; i < 7; i++){
            TOPS.push(($('#impact-' + i).offset()).top);
        }
        RESIZED = false;
    }

    var scroll = $(window).scrollTop();
    for(i = 1; i < 7; i++){
        if(scroll < TOPS[i - 1]){
            bolden(i);
            break;
        }
    }
}

$(function jQueryScroll (){
    if($('#impact-1').length > 0) {
        $(window).scroll(function () {
            scrollEvent();
        });
    }
});

/*$(document).ready(function() {

    $('ul  li > div').click(function(e) {
        e.preventDefault();
        $('ul  li > div').removeClass('active');
        $(this).addClass('active');
       // window.moveTo($(this).attr('href'));
    });
});*/
