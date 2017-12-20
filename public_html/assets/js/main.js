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

$(document).ready(function () {
    /*
    START DONATE PAGE STUFF
     */
    if ($('body').hasClass('donate-page')) {
        var amountSelected = 10; // Default

        // Add evt lstnr to check marks to trigger correct modal
        $('.donate-modal-trigger').click(function (e) {

            amountSelected = parseInt(this.dataset.amount);
            console.log(".donate-modal-trigger", amountSelected);


            $('.donate-amount-select div').removeClass('selected');

            if (amountSelected != -1){
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
                console.log("Selected from modal: ", amountSelected);
            }
            else {
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
            }
        });
        // Add evt lstnr to amount selection in 1st page of modal box
        $('.donate-amount-select').click(function (e) {
            console.log('donate-amount-select');
            amountSelected = parseInt(this.dataset.amount);

            $('.donate-amount-select div').removeClass('selected');

            // TODO: @minimike511 your error is here for the hide thing, you shouldnt add it to the child, but hte parent
            if (amountSelected == 10 || amountSelected == 30 || amountSelected == 50 || amountSelected == 130 || amountSelected == -1) {
                $('.donate-amount-select[data-amount=' + amountSelected + '] div').addClass('selected');
            }
        });
        // Add evt lstnr to amount selection confirm in 1st page of modal box
        $('#donate-payment-info').click(function (e) {
            console.log("#donate-payment-info");
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;


            if (amountSelected == 0 || amountSelected == "") {
                console.log("Invalid amount!");
                return;
            }

            $('.donate-page-1').addClass('hidden');
            $('.donate-page-2').removeClass('hidden');


            $('.donate-amount-value').text('Amount ' + amountSelected + ' USD');
        });

        $('#3ds-form-button').click(function(e){
            if(amountSelected == 10){
                window.open('https://paystack.com/pay/uaqpydp3lj');
            }
            else if(amountSelected == 30){
                window.open('https://paystack.com/pay/ayg5j2dyl0');
            }
            else if (amountSelected == 50){
                window.open('https://paystack.com/pay/rrtdah07yp');
            }
            else if (amountSelected == 130){
                window.open('https://paystack.com/pay/eipbmgz7kd');
            }
            else {
                window.open('https://paystack.com/pay/o1s5mpymru');
            }
        })
    }
    /*
    END DONATE PAGE STUFF
     */
});