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
            // TODO: @nobodyrandom huh??!?! doing same thing? vvvvvv
            // TODO: @minimike511 lol accidents happen, but i think it is working for now. Can you confirm it can take in amounts outside of the list?
            // TODO: @minimike511 LOL I just checked the git blame on this line, you wrote it .-.
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

            // TODO: @minimike511 your error is here for the hide thing, you shouldnt add it to the child, but hte parent
            if (amountSelected == 10 || amountSelected == 30 || amountSelected == 50 || amountSelected == 130){
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
            } else{
                $('.donate-amount-select').parent().addClass('hidden');
                $('.donate-amount-select[data-amount="-1"]').parent().removeClass('hidden');
                $('.donate-amount-select[data-amount="-1"] div').addClass('selected');
                $('.donate-other-amount').parent().removeClass('hidden');
            }
        });
        // Add evt lstnr to amount selection confirm in 1st page of modal box
        $('#donate-payment-info').click(function (e) {
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;

            if (amountSelected != 10 && amountSelected != 30 && amountSelected != 50 && amountSelected != 130)
                amountSelected = $('.donate-other-amount').val();

            if (amountSelected == 0 || amountSelected == "" || amountSelected == -1) {
                console.log("Invalid amount!");
                return;
            }

            $('.donate-page-1').addClass('hidden');
            $('.donate-page-2').removeClass('hidden');

            $('.form-input-amount')[0].value = amountSelected;
            $('.donate-amount-value').text('Amount ' + amountSelected + ' USD');

        });
    }
    /*
    END DONATE PAGE STUFF
     */

});