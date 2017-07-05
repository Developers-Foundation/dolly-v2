<?php
$page = "donate-page";
$pageTitle = "Donate";
$hasGmap = false;
$hasPayStack = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!--
    NOTE: All stylesheet and scripts should be included in this file, since paths will not point
    to the correct locations once php includes your designated module.
    -->

    <!--=========================================== WEBPAGE METADATA ====================================-->
    <?php
    include_once "html_elements/header-meta.php"
    ?>

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/less/main.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <?php
    if ($page == "donate-page") {
        ?>
        <!-- LOL I GAVE UP ON THE SLIDER, DONT MIND ME :P -->
        <link rel="stylesheet" type="text/css" href="assets/css/toggle-switch.min.css"/>
        <?php
    }
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="donate-page">
<!--=========================================== MAIN FILES ==========================================-->
<?php
include_once "html_elements/navBar.php";
include_once "html_elements/navBarTab.php";
include "html_elements/donate.php";
?>
<!-- Temp form -->
<!-- TODO: Move this into donate.php designs -->
<!-- <div class="container" style="padding-top: 500px;">
    <div class="section">
        <form id="nob-paystack-card-form">
            <input
                    type="text"
                    data-paystack="amount"
                    placeholder="amount in cents"
                    class="form-input-amount"
                    pattern="\d*" >
            <input
                    type="text"
                    data-paystack="number"
                    placeholder="card number"
                    class="form-input-card"
                    pattern="\d*"
                    maxlength="19" >
            <input
                    type="text"
                    data-paystack="name"
                    placeholder="name"
                    class="form-input-name"
                    pattern="[a-z]{1,25}">
            <input
                    type="text"
                    data-paystack="email"
                    placeholder="email"
                    class="form-input-email"
                    pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
            <input
                    type="text"
                    data-paystack="cvv"
                    placeholder="cvv"
                    class="form-input-cvv">
            <input
                    type="text"
                    data-paystack="expiryMonth"
                    placeholder="month"
                    class="form-input-exp-m"
                    pattern="\d*"
                    maxlength="2"
                    data-valid-example="05">
            <input
                    type="text"
                    data-paystack="expiryYear"
                    placeholder="year"
                    class="form-input-exp-y"
                    pattern="\d*"
                    minlength="2"
                    maxlength="4"
                    data-valid-example="18">
            <button type="submit" data-paystack="submit">Submit</button>
        </form>
    </div>
</div> -->
<?php
include_once "html_elements/footer2.php";

include "html_elements/donate-modal.php";
?>

<!--=========================================== JS SCRIPTS ==========================================-->
<!-- jQuery -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- <script src="js/jqBootstrapValidation.js"></script>-->
<!-- <script src="js/contact_me.js"></script>-->

<!-- Theme JavaScript -->
<script src="assets/js/freelancer.js"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<!-- Additional JS Files-->
<script src="assets/js/nob.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>

<!-- Google Maps API File -->
<?php
if ($hasGmap) {
    ?>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBjGkX6gbOjiM6Ewg3cTeqGyK25z6YFdqQ&callback=loadedGmap" async
            defer>
        loadedGmap();
    </script>
    <?php
}

if ($hasPayStack) {
    ?>
    <script src="//js.paystack.co/v1/paystack.js"></script>
    <?php
}
?>
<!-- reCaptcha -->
<script src="//www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
