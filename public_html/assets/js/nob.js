/**
 * Created by harrisonchow on 7/10/16.
 */

function promAjax(options) {
    return new Promise(function (resolve, reject) {
        $.ajax(options).done(resolve).fail(reject);
    });
}

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
        scrollwheel: false,
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
                toName = "Dolly Children Foundation",
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

var pinEnabled = false;

function quickFillForm() {
    // TODO: @minimike511 you know if you just write the function, itd save us all so much time :P

    var thisForm = $('#nob-paystack-card-form');
    var submitButton = thisForm.find('button');
    var occurrenceField = thisForm.find('input[name=donate-occurrence]:checked');
    var cardField = thisForm.find('.form-input-card');
    var nameField = thisForm.find('.form-input-name');
    var amountField = thisForm.find('.form-input-amount');
    var emailField = thisForm.find('.form-input-email');
    var cvvField = thisForm.find('.form-input-cvv');
    var expMField = thisForm.find('.form-input-exp-m');
    var expYField = thisForm.find('.form-input-exp-y');
    if (pinEnabled) var pinField = thisForm.find('.form-input-pin');

    //Donor Information
    var nameFirstField = thisForm.find('.form-input-name-first');
    var nameLastField = thisForm.find('.form-input-name-last');
    var phoneField = thisForm.find('.form-input-number-phone');
    var streetField = thisForm.find('.form-input-address');
    var streetFieldOpt = thisForm.find('.form-input-address-opt');
    var cityField = thisForm.find('.form-input-city');
    var postalField = thisForm.find('.form-input-postal');
    var countryField = thisForm.find('.form-input-country');
    var stateField = thisForm.find('.form-input-state');

    cardField.val("50785078507850780");
    nameField.val("Nobody Random");
    emailField.val("iamnobodyrandom@yahoo.com");
    cvvField.val("884");
    expMField.val("12");
    expYField.val("20");
    if (pinEnabled) pinField.val("0000");
    nameFirstField.val("Nobody");
    nameLastField.val("Random");
    phoneField.val("1234567890");
    streetField.val("123 NoWhere LoL");
    streetFieldOpt.val("Line 2 of street .-.");
    cityField.val("CantThinkOfOne");
    postalField.val("123456");
    countryField.val("hmm");
    stateField.val("Ive given up");
}

function validateCard(rsp, paystack, data) {
    console.log("Charge response: ");
    console.log(rsp);
    $('.donate-page-3').removeClass('hidden');

    switch (rsp.status) {
        case "success":
            return rsp;
        case "auth":
            break;
        default:
            // TODO: Catch failed / invalid / timeout
            throw {"status": false, "reason": "error-2"};
    }

    // Assume anything here is to do with OTP/PIN requirements
    // Options are PIN/OTP/3DS/Phone
    var type = rsp.data.auth;
    var verificationForm = $('#nob-paystack-verification-form');
    var verificationMsgField = verificationForm.find('#donate-verification');
    var verificationMsg = "PIN";

    switch (rsp.data.auth) {
        case "PIN":
            // Still need this? maybe reroute to page 2
            break;
        case "otp":
            verificationMsg = "One Time Password";
            var field = verificationForm.find('.form-input-token');
            field.dataset.paystack = "otp";
            field.placeholder = "OTP";
            // TODO: There should be a better way to do this =,=

            break;
        case "3DS":
            // External verification TODO: Need to verify that this works.
            return paystack.card.verify3DS();
        //verificationForm.innerHTML = "<h5>You will be required to verify your card with securecode</h5><br><button type=\"submit\" data-paystack=\"submit\" class=\"button-red\">Submit</button>";
        case "phone":
            // Card needs to be enrolled for online verification
            return paystack.card.validatePhone({phone: phone});
        default:
            throw {"status": false, "reason": "Sorry, your credit card is not supported."}; // TODO: Authentication method not supported yet
    }

    verificationMsgField.innerHTML = verificationMsg;
    // TODO: need to leave this promise and rejoin after secondary form submits PROPERLY

    return rsp;
}

function resetForm(rsp, paystack, backupData) {
    console.log("Reset form now: ");
    console.log(rsp);
    $('.donate-page-3').addClass('hidden');
    $('.donate-page-4').removeClass('hidden');

    var donorInfo = {
        status: true,
        data: {
            firstName: backupData.firstName,
            lastName: backupData.lastName,
            email: backupData.email,
            phone: backupData.phone,
            street: backupData.street,
            streetOpt: backupData.streetOpt,
            city: backupData.city,
            postal: backupData.postal,
            country: backupData.country,
            state: backupData.state,
            referenceID: rsp.data.reference
        }
    };

    $.ajax({
        url: "html_elements/paystack/db-log.php",
        method: "POST",
        dataType: "JSON",
        data: donorInfo,
        success: function (rspMsg) {
            console.log("Log response: ");
            console.log(rspMsg);
        },
        error: function (errMsg) {
            console.log("Log error: ");
            console.log(errMsg);
        }
    });

    // TODO: Show success + reset form + time set
    backupData.cardField.val("");
    backupData.nameField.val("");
    backupData.amountField.val("");
    backupData.emailField.val("");
    backupData.cvvField.val("");
    backupData.expMField.val("");
    backupData.expYField.val("");

    backupData.nameFirstField.val("");
    backupData.nameLastField.val("");
    backupData.phoneField.val("");
    backupData.streetField.val("");
    backupData.streetFieldOpt.val("");
    backupData.cityField.val("");
    backupData.postalField.val("");
    backupData.countryField.val("");
    backupData.stateField.val("");

    backupData.submitButton.html("Received");
    backupData.submitButton.addClass("btn-success");

    $('.donate-page-1').addClass("hidden");
    $('.donate-page-2').addClass("hidden");
    $('.donate-page-3').addClass("hidden");
    $('.donate-page-thanks').removeClass('hidden');
}


$(document).ready(function (e) {
    if ($('body').hasClass('donate-page')) {
        var paystack;
        var backupData;

        $("form#nob-paystack-verification-form").submit(function (e) { // TODO WHY TF IS THIS NOT BEING TRIGGERED.
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;

            paystack.card.validateToken({
                token: $('.form-input-token').val()
            }).then(function (rsp) {
                return validateCard(rsp, paystack, backupData)
            }).then(function (rsp) {
                return resetForm(rsp, paystack, backupData);
            }, function (err) {
                console.log(err);
            });
        });

        $('#donate-payment').on('hidden.bs.modal', function () {
            console.log("#donate-payment")
            $('.donate-page-1').removeClass('hidden');
            $('.donate-amount-select').parent().removeClass('hidden');
            $('.donate-other-amount').parent().addClass('hidden');
            $('.donate-amount-select[data-amount="-1"]').parent().removeClass('hidden');
            $('.donate-amount-select[data-amount="-1"] div').removeClass('selected');
            $('.donate-page-2').addClass("hidden");
            $('.donate-page-thanks').addClass("hidden");
            $('.donate-page-error').addClass("hidden");
            $('.donate-other-amount').val("");
            $('.donate-button-submit').text("Submit");
            $('.donate-button-submit').removeClass("btn-success");
            grecaptcha.reset();
        });

        //TODO: use.onchange()
        $('#nob-paystack-card-form').submit(function (e) {
            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;
            $('.donate-page-2').addClass('hidden');

            var thisForm = $(this).closest('#nob-paystack-card-form');
            var submitButton = thisForm.find('button');
            //submitButton.prop("disabled", true);
            var occurrenceField = thisForm.find('input[name=donate-occurrence]:checked');
            var cardField = thisForm.find('.form-input-card');
            var nameField = thisForm.find('.form-input-name');
            var amountField = thisForm.find('.form-input-amount');
            var emailField = thisForm.find('.form-input-email');
            var cvvField = thisForm.find('.form-input-cvv');
            var expMField = thisForm.find('.form-input-exp-m');
            var expYField = thisForm.find('.form-input-exp-y');
            if (pinEnabled) var pinField = thisForm.find('.form-input-pin');

            //Donor Information
            var nameFirstField = thisForm.find('.form-input-name-first');
            var nameLastField = thisForm.find('.form-input-name-last');
            var phoneField = thisForm.find('.form-input-number-phone');
            var streetField = thisForm.find('.form-input-address');
            var streetFieldOpt = thisForm.find('.form-input-address-opt');
            var cityField = thisForm.find('.form-input-city');
            var postalField = thisForm.find('.form-input-postal');
            var countryField = thisForm.find('.form-input-country');
            var stateField = thisForm.find('.form-input-state');

            //var cvvField = thisForm.find('.form-input-message');
            //var cvvField = thisForm.find('.form-input-message');
            //var captcha = thisForm.find('[name=g-recaptcha-response]')[0];
            // TODO: @minimike511 is it just me, or is the captcha field being ignored LOL

            // TODO: regex for card number space
            var card = cardField.val(),
                name = nameField.val(),
                occurrence = (occurrenceField == "monthly"), // True is monthly, false is one-time
                amount = parseInt(amountField.val()) * 100, // TODO: May need to fix this as what would happen when you have half cents
                email = emailField.val(),
                cvv = parseInt(cvvField.val()),
                expM = parseInt(expMField.val()),
                expY = parseInt(expYField.val());
                firstName = nameFirstField.val(),
                lastName = nameLastField.val(),
                phone = parseInt(phoneField.val()),
                street = streetField.val(),
                streetOpt = streetFieldOpt.val(),
                city = cityField.val(),
                postal = postalField.val(),
                country = countryField.val(),
                state = stateField.val();
            if (pinEnabled) var pin = pinField.val();
            var sendData = {'EMAIL': email, 'AMOUNT': amount, 'OCCURRENCE': occurrence};
            backupData = {
                firstName: firstName,
                lastName: lastName,
                email: email,
                phone: phone,
                street: street,
                streetOpt: streetOpt,
                city: city,
                postal: postal,
                country: country,
                state: state,
                cardField: cardField,
                nameField: nameField,
                amountField: amountField,
                emailField: emailField,
                cvvField: cvvField,
                expMField: expMField,
                expYField: expYField,
                nameFirstField: nameFirstField,
                nameLastField: nameLastField,
                phoneField: phoneField,
                streetField: streetField,
                streetFieldOpt: streetFieldOpt,
                cityField: cityField,
                postalField: postalField,
                countryField: countryField,
                stateField: stateField,
                captchaField: null,
                submitButton: submitButton
            };
            // TODO: Do form verification on ALL fields :P


// TODO: Catch all errors in php and js, then put in phone number fields + OTP auth + captcha lol, so much to do .-.
            // Initialize paystack object
            promAjax({
                // Get Access Code
                url: "https://dollychildren.org/html_elements/paystack/authorize.php",
                method: 'POST',
                cache: false,
                dataType: 'JSON',
                data: sendData
            }).then(function (resp) {
                console.log("Authorize response: ");
                console.log(resp);

                if (!resp.status) {
                    // Get authorize failed (prob priv key failed)
                    throw {"status": false, "reason": "error-1"};
                }

                var respData = resp.data;

                return Paystack.init({
                    form: "nob-paystack-card-form", // Form ID
                    access_code: respData.access_code
                });
            }).then(function (returnedObj) {
                console.log("Init response: ");
                console.log(returnedObj);
                paystack = returnedObj;
                if (!pinEnabled) {
                    throw {"status": false, "reason": "Your credit card requires pin verification."};
                }

                var pinObj = {};
                console.log("PIN: " + pin);
                if (pin != "" && pin != 0 && pin != -1) {
                    pinObj = {pin: pin}
                }
                return paystack.card.charge(pinObj);
            }).then(function (rsp) {
                return validateCard(rsp, paystack, backupData);
            }).then(function (rsp) {
                    return resetForm(rsp, paystack, backupData);
                },
                function (error) {
                    console.log(error);
                    $.ajax({
                        url: "html_elements/paystack/db-log.php",
                        method: "POST",
                        dataType: "JSON",
                        data: {status: false, data: JSON.stringify(error)},
                        success: function (rspMsg) {
                            console.log("Log response: ");
                            console.log(rspMsg);
                        },
                        error: function (errMsg) {
                            console.log("Log error: ");
                            console.log(errMsg);
                        }
                    });
                    $('.donate-page-error').removeClass('hidden');
                    // TODO: IDK what this is lol
                });
        });
    }
});

/* ----------------------------------------------------------- */
/* Nob PayStack END
 /* ----------------------------------------------------------- */