var RESIZED = true;
var TOPS = [];

$(function jQueryResize() {
    $(window).resize(function () {
        RESIZED = true;
        fixNavTab();
    });
    fixNavTab();
});

function fixNavTab() {
    $('.navtab').css('top', String($('.navbar-fixed-top')[0].offsetHeight - Math.max(0, (17 - $(window).width() / 150))) + "px");
}

function bolden(num) {
    for (var i = 1; i < 7; i++) {
        if (i <= num) {
            /*$('#impact-' + i).css({
                'border-color': 'rgb(74, 144, 226)',
                'color': 'rgb(74, 144, 226)'
            });*/
            $('#li-impact-' + i).addClass("selected");
        } else {
            /*$('#impact-' + i).css({
                'border-color': 'white',
                'color': 'white'
            });*/
            $('#li-impact-' + i).removeClass("selected");
        }
    }
}

function scrollEvent() {
    if (RESIZED) {
        TOPS = [];
        for (var i = 1; i < 7; i++) {
            TOPS.push(($('#impact-' + i).offset()).top);
        }
        RESIZED = false;
    }

    var scroll = $(window).scrollTop();
    for (i = 1; i < 7; i++) {
        if (scroll < TOPS[i - 1]) {
            bolden(i);
            break;
        }
    }
}

$(function jQueryScroll() {
    if ($('#impact-1').length > 0) {
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

$(document).ready(function () {
    /*
    START DONATE PAGE STUFF
     */
    if ($('body').hasClass('donate-page')) {
        var amountSelected = 0;

        // Add evt lstnr to check marks to trigger correct modal
        $('.donate-modal-trigger').click(function (e) {
            amountSelected = parseInt(this.dataset.amount);
            console.log("Selected: " + amountSelected);

            $('.donate-amount-select div').removeClass('selected');

            if (amountSelected != -1)
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
            else{
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
            }
        });
        // Add evt lstnr to amount selection in 1st page of modal box
        $('.donate-amount-select').click(function (e) {
            amountSelected = parseInt(this.dataset.amount);
            console.log("Selected: " + amountSelected);

            $('.donate-amount-select div').removeClass('selected');

            if (amountSelected != -1)
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
            else{
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
                $('.donate-amount-select[data-amount= 10] div').addClass('hide');
                $('.donate-amount-select[data-amount= 30] div').addClass('hide');
                $('.donate-amount-select[data-amount= 50] div').addClass('hide');
                $('.donate-amount-select[data-amount= 130] div').addClass('hide');
            }
        });
        // Add evt lstnr to amount selection in 1st page of modal box
        $('#donate-payment-info').click(function (e) {
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;

            $('.donate-page-1').addClass('hidden');
            $('.donate-page-2').removeClass('hidden');
            $('.form-input-amount')[0].value = amountSelected;
        });
    }
    /*
    END DONATE PAGE STUFF
     */

});