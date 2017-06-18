/**
 * Created by harrisonchow on 7/10/16.
 */

 /* ----------------------------------------------------------- */
 /* Nob Google Map Start
 /* ----------------------------------------------------------- */
function loadedGmap() {
    // if ($('body').hasClass("index-page")) {
        // create a LatLng object containing the coordinate for the center of the map
        var latlng = new google.maps.LatLng(-33.86455, 151.209);

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
                toName = "Fakey McFakeName";

            var sendData = JSON.stringify({
                'sendFrom': sendFrom,
                'fromName': fromName,
                'sendTo': sendTo,
                'toName': toName,
                'subject': subject,
                'msg': msg,
                'msgHTML': msgHTML
            });

        /* Print the current working directory. */
            // var loc = window.location.pathname;
            // var dir = loc.substring(0, loc.lastIndexOf('/'));
            // console.log(dir);

            $.ajax({
                url: 'html_elements/mailer.php',
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
                }
            });
        }
    });
});
 /* ----------------------------------------------------------- */
 /* Nob Mailer END
 /* ----------------------------------------------------------- */