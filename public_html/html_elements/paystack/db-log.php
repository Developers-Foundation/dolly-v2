<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 2017-07-03
 * Time: 오전 11:23
 */
require '../../../vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseException;


$data = $_POST["data"];
$errMsg = "";
$success = true;

ParseClient::initialize('dolly-v2-db', 'YOUR_CLIENT_KEY', 'thisismymasterkey');
ParseClient::setServerURL('http://dolly-v2-db.herokuapp.com', '/database/parse');
error_log($_POST['status']);
if( $_POST['status'] === "true") {
    $information = new ParseObject("Information");
    $information->set("firstName", $data['firstName']);
    $information->set("lastName", $data['lastName']);
    $information->set("email", $data['email']);
    $information->set("phone", (int)$data['phone']);
    $information->set("street", $data['street']);
    $information->set("streetOpt", $data['streetOpt']);
    $information->set("city", $data['city']);
    $information->set("postal", $data['postal']);
    $information->set("country", $data['country']);
    $information->set("state", $data['state']);
    $information->set("referenceID", $data['referenceID']);
    $errMsg = $errMsg . $data['firstName'] . " " . $data['lastName'] . " " . $data['referenceID'];
}else{
    $information = new ParseObject("ErrorLog");
    $information->set('error', $data);
    $errMsg = $errMsg . " Successfully error logged ";
}
try {
    $information->save();
    //echo 'New object created with objectId: ' . $application->getObjectId();
} catch (ParseException $ex) {
// Execute any logic that should take place if the save fails.
// error is a ParseException object with an error code and message.
    //echo 'Failed to create new object, with error message: ' . $ex->getMessage();
    $success = false;
    $errMsg = $errMsg . 'Failed to create new object, with error message: ' . $ex->getMessage() . '<br>';
}

// Message out JSON
$successMessage = ($success)? 'true' : 'false';
echo "{\"success\":" . $successMessage . ",\"errorMessage\":\"" . $errMsg . "\"}";

//header("Location: http://westerncyber.club/submitted"); /* Redirect browser */
exit();
?>
