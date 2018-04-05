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
        $url = "tel:+2348186891611";
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
        $url = "https://dollychildren.wordpress.com/";
        break;
    case "twitter":
        $url = "https://twitter.com/DollyChildren";
        break;
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
        $url = "http://dollychildren.org/";
}

header("Location: " . $url);
exit;
?>