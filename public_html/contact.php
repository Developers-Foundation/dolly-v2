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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111459310-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-111459310-1');
    </script>

</head>

<body class="contact-page">
<!--=========================================== MAIN FILES ==========================================-->
<?php
$page = "contact-us";
$pageTitle = "Contact";
$hasGmap = true;
include_once "html_elements/navBar.php";
include_once "html_elements/navBarTab.php";

include "html_elements/googleMaps.php";
include "html_elements/contactUs2.php";

include_once "html_elements/footer2.php";
?>

<!--=========================================== JS SCRIPTS ==========================================-->
<!-- jQuery -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin JavaScript -->
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>

<!-- Contact Form JavaScript -->
<!-- <script src="js/jqBootstrapValidation.js"></script>-->
<!-- <script src="js/contact_me.js"></script>-->

<!-- Theme JavaScript -->
<script src="assets/js/freelancer.min.js"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/material-kit.min.js" type="text/javascript"></script>

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
?>

<!-- reCaptcha -->
<script src="//www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
