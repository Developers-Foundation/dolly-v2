<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/10/16
 * Time: 12:52 AM
 */

$linkTo = $_GET['link'];
switch ($linkTo) {
    case "phone":
    case "mobile":
        $url = "tel:+2346782631273";
        break;
    case "email":
        $url = "mailto:info@dollychildren.org";
        break;
    case "dev":
        $url = "https://developersfoundation.ca/";
        break;
    case "facebook":
        $url = "https://www.facebook.com/DollyChildrenFoundation";
        break;
    case "blog":
    case "rss":
    case "medium":
        $url = "https://medium.com/";
        break;
    case "github":
        $url = "https://github.com/";
        break;
    case "instagram":
        $url = "https://www.instagram.com/dollychildren/";
        break;
    case "home":
    default:
        $url = "http://dolly-v2.herokuapp.com/";
}

header("Location: " . $url);
exit;
?>