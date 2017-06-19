
<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 4/14/16
 * Time: 10:32 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require '../../vendor/autoload.php';
$getPost = (array)json_decode(file_get_contents('php://input'));

// Check reCAPTCHA data FIRST
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $_ENV['RECAPTCHA_SECRET'], 'response' => $getPost['captcha']);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

try {
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    $response = json_decode($result);
    if ($response['success'] == false) {
        echo json_encode(array('success' => false, 'message' => "CAPTCHA Failed"));
        exit;
    }
} catch (Exception $e) {
    echo json_encode(array('success' => false, 'message' => $e));
    exit;
}


$sendgrid = new SendGrid($_ENV["SENDGRID_API_KEY"]); // PUT IN REAL API INTO HEROKU ENV Variables
$email = new SendGrid\Email();

$email
    ->addTo($_ENV["EMAIL_TO"])              // TODO: so should your send to email to avoid abuse
    ->addToName($getPost['toName'])
    //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves.
    // We are now using our Web API parameters instead of the X-SMTPAPI header.
    // What this means is that if you call `addTo()` multiple times for an email,
    // **ONE** email will be sent with each email address visible to everyone.
    ->setFrom($getPost['sendFrom'])
    ->setFromName($getPost['fromName'])
    ->setSubject($getPost['subject'])
    ->setText($getPost['msg'])
    ->setHtml($getPost['msgHTML']);

//test
try {
    $sendgrid->send($email);
    echo json_encode(array('success' => true, 'message' => "done"));
} catch (\SendGrid\Exception $e) {
    $err = $e->getCode() . "\n";
    foreach ($e->getErrors() as $er) {
        $err = $err . $er . "\n";
    }
    echo json_encode(array('success' => false, 'message' => $err));
}

