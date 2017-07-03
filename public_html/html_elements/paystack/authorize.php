<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/27/17
 * Time: 10:07 PM
 */

require '../../../vendor/autoload.php';
use Yabacon\Paystack;

$secret = $_ENV["PAYSTACK_PRIV_KEY"];
$email = $_POST["EMAIL"];
$amount = $_POST["AMOUNT"];
// TODO: Make it alphanumeric and store to db
$token = bin2hex(random_bytes(16));

$paystack = new Paystack($secret);
$responseObj = $paystack->transaction->initialize([
    "reference"=> $token,
    "amount"=> $amount,
    "email"=> $email,
]);

echo json_encode($responseObj);

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip; // Output IP address [Ex: 177.87.193.134]


