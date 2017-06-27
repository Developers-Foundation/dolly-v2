<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/27/17
 * Time: 10:07 PM
 */

$email = $_POST["EMAIL"];
$amount = $_POST["AMOUNT"];
// TODO: Make it alphanumeric and store to db
$token = bin2hex(random_bytes(16));

$result = array();
//Set other parameters as keys in the $postdata array
$postdata =  array('email' => $email, 'amount' => $amount, "reference" => $token);
$url = "https://api.paystack.co/transaction/initialize";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Authorization: Bearer ' . $_ENV["PAYSTACK_PRIV_KEY"],
    'Content-Type: application/json',

];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$request = curl_exec ($ch);

curl_close ($ch);

if ($request) {
    $result = json_decode($request, true);
    echo json_encode($result);
}
