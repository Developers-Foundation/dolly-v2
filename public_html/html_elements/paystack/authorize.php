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

echo $responseObj;
