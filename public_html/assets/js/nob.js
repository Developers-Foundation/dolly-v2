/**
 * Created by harrisonchow on 7/10/16.
 */

/* ----------------------------------------------------------- */

/* Nob Google Map Start
 /* ----------------------------------------------------------- */
function loadedGmap() {
    // if ($('body').hasClass("index-page")) {
    // create a LatLng object containing the coordinate for the center of the map
    var latlng = new google.maps.LatLng(6.593691, 3.352847);

    // Find your styles here :) https://snazzymaps.com/explore
    var styleArr =
        [
            {
                "featureType": "landscape",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 60
                    }
                ]
            },
            {
                "featureType": "road.local",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 40
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": 30
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ef8c25"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#b6c54c"
                    },
                    {
                        "lightness": 40
                    },
                    {
                        "saturation": -40
                    }
                ]
            },
            {}
        ];

    // prepare the map properties
    var options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        navigationControl: true,
        mapTypeControl: false,
        scrollwheel: true,
        styles: styleArr,
        disableDoubleClickZoom: true
    };

    // initialize the map object
    var map = new google.maps.Map(document.getElementById('google_map'), options);

    // add Marker
    var marker1 = new google.maps.Marker({
        position: latlng, map: map
    });

    // add listener for a click on the pin
    google.maps.event.addListener(marker1, 'click', function () {
        infowindow.open(map, marker1);
    });

    // add information window
    var infowindow = new google.maps.InfoWindow({
        content: '<h5 class="info"><strong>This is our HQ </strong><br><br>You can find us at<br> 32846 Sydney</h5>'
    });
    // }
}

/* ----------------------------------------------------------- */
/* Nob Google Map End
 /* ----------------------------------------------------------- */

/* ----------------------------------------------------------- */
/* Nob Carousel Correction
 /* ----------------------------------------------------------- */
$('.carousel.three .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    if (next.next().length > 0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});
/* ----------------------------------------------------------- */
/* Nob Three Carousel Correction END
 /* ----------------------------------------------------------- */


/* ----------------------------------------------------------- */
/* Nob Mailer START
 /* ----------------------------------------------------------- */

// Check email's validation
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready(function () {
    $('form.form-email').submit(function (e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form.form-email');
        var submitButton = thisForm.find('button');
        submitButton.prop("disabled", true);
        var emailField = thisForm.find('.form-input-email');
        var nameField = thisForm.find('.form-input-name');
        var messageField = thisForm.find('.form-input-message');
        var captcha = thisForm.find('[name=g-recaptcha-response]')[0];
        console.log(captcha);

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = emailField.val(),

                // TODO: this field does not matter, the to address needs to be an environment variable on heroku
                sendTo = "",
                subject = "Message from " + nameField.val(),
                msg = messageField.val(),
                msgHTML = "<p>" + messageField.val() + "<p>",
                fromName = nameField.val(),

                // TODO: change to the name of the person that the message is being sent to.
                toName = "Fakey McFakeName",
                captcha = captcha.value;
            console.log(captcha);
            if (validateEmail(sendFrom)) {
                var sendData = JSON.stringify({
                    'sendFrom': sendFrom,
                    'fromName': fromName,
                    'sendTo': sendTo,
                    'toName': toName,
                    'subject': subject,
                    'msg': msg,
                    'msgHTML': msgHTML,
                    'captcha': captcha
                });
            }

            /* Print the current working directory. */
            // var loc = window.location.pathname;
            // var dir = loc.substring(0, loc.lastIndexOf('/'));
            // console.log(dir);

            $.ajax({
                url: '../html_elements/mailer.php', //edit this
                crossDomain: false,
                data: sendData,
                method: "POST",
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    // Deal with JSON
                    console.log(data);
                    var returnData = data;

                    submitButton.removeClass("btn-primary");
                    if (returnData.success) {
                        // Throw success msg
                        emailField.val("");
                        nameField.val("");
                        messageField.val("");
                        submitButton.html("Received");
                        submitButton.addClass("btn-success");
                    } else {
                        // Throw error message
                        submitButton.html("Sorry an error occurred");
                        submitButton.addClass("btn-danger");
                    }
                    submitButton.prop("disabled", false);
                    grecaptcha.reset();
                },
                error: function (error) {
                    // console.log(sendData);
                    console.log("Email was not sent successfully.");
                    console.log(error);
                    // Throw error message
                    submitButton.html("Sorry an error occured");
                    submitButton.removeClass("btn-primary");
                    submitButton.addClass("btn-danger");
                    submitButton.prop("disabled", false);
                    grecaptcha.reset();
                }
            });
        }
    });
});
/* ----------------------------------------------------------- */
/* Nob Mailer END
 /* ----------------------------------------------------------- */

/* ----------------------------------------------------------- */
/* Nob PayStack START
 /* ----------------------------------------------------------- */

/*
TEST CARD:
Card Number: 5078 5078 5078 5078 0 (Verve)
50785078507850780
Expiry Date: any date in the future
CVV: 884
PIN: 0000
Phone: If less than 10 numeric characters, Transaction will fail.
OTP: 123456

Card Number: 408 408 408 408 408 1
4084084084084081
Expiry Date: any date in the future
CVV: 408
 */

$(document).ready(function () {
    if ($('body').hasClass('donate-page')) {
        //TODO: use.onchange()
        $('#nob-paystack-card-form').submit(function (e) {
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;

            var thisForm = $(this).closest('#nob-paystack-card-form');
            var submitButton = thisForm.find('button');
            //submitButton.prop("disabled", true);
            var cardField = thisForm.find('.form-input-card');
            var nameField = thisForm.find('.form-input-name');
            var amountField = thisForm.find('.form-input-amount');
            var emailField = thisForm.find('.form-input-email');
            var cvvField = thisForm.find('.form-input-cvv');
            var expMField = thisForm.find('.form-input-exp-m');
            var expYField = thisForm.find('.form-input-exp-y');
            //var cvvField = thisForm.find('.form-input-message');
            //var cvvField = thisForm.find('.form-input-message');
            //var captcha = thisForm.find('[name=g-recaptcha-response]')[0];
            // TODO: regex for card number space
            var card = cardField.val(),
                name = nameField.val(),
                amount = amountField.val(),
                email = emailField.val(),
                cvv = cvvField.val(),
                expM = expMField.val(),
                expY = expYField.val();
            var sendData = {'EMAIL': email, 'AMOUNT': amount};
            // TODO: Do form verification on ALL fields :P


// TODO: Catch all errors in php and js, then put in phone number fields + OTP auth + captcha lol, so much to do .-.
            // Initialize paystack object
            var paystack;
            $.ajax({
                // Get Access Code
                url: "https://dolly-v2-pr-26.herokuapp.com/html_elements/paystack/authorize",
                method: 'POST',
                cache: false,
                dataType: 'JSON',
                data: sendData
            }).then(function (resp) {
                console.log(resp);
                if (!resp.status) {
                    // Get authorize failed (prob priv key failed) TODO: fix this lol
                    return this.reject({"status": false, "reason": "error-1"});
                }

                var respData = resp.data;

                // TODO: Move this inner promise to outer loop
                return Paystack.init({
                    form: "nob-paystack-card-form", // Form ID
                    access_code: respData.access_code

                    /* TODO: CATCH FAIL TO INIT
                    catch(function(error){
                        console.log("There was an error loading Paystack", error);
                    });
                     */
                }).then(function (returnedObj) {
                    console.log(returnedObj);
                    paystack = returnedObj;
                    return paystack.card.charge({
                        // TODO: OTP/PIN + Verify OTP if OTP
                        //pin: readPin() // Called a function that returns the optional pin value
                    });
                }).then(function (response) {
                    console.log(response);
                    // TODO: Show success + reset form

                }, function (error) {
                    console.log(error);
                    // TODO: IDK what this is lol

                });
            }).fail(function (error) {
                console.log(error);
                // TODO: IDK what this is lol
            });
        });
    }
});

/* ----------------------------------------------------------- */
/* Nob PayStack END
 /* ----------------------------------------------------------- */