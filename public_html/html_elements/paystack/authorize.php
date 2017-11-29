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
$occurrence = $_POST["OCCURRENCE"]; // True is monthly, false is one-time
$email = $_POST["EMAIL"];
$amount = $_POST["AMOUNT"];
// TODO: Make it alphanumeric and store to db
$token = bin2hex(random_bytes(16));

$paystack = new Paystack($secret);

if ($occurrence) {
    $planCode;
    $quantity = 1;

    // Find plan, if not use multiplier of 1USD TODO: make the other plans and make sure currency is good.
    switch ($amount) {
        case "10":
            $planCode = "PLN_6nf50bv9t8lyy3s";
            break;
        case "30":
            $planCode = "PLN_qqaro4sghpxueqy";
            break;
        default:
            $planCode = "PLN_viqyphyh1rm7fd9";
            $quantity = intval($amount);
    }

    $responseObj = $paystack->transaction->initialize([
        "reference"=>$token,
        "plan"=> $planCode,
        "quantity"=>$quantity,
        "email"=>$email,
    ]);
} else {
    $responseObj = $paystack->transaction->initialize([
        "reference"=> $token,
        "amount"=> $amount,
        "email"=> $email,
    ]);
}

echo json_encode($responseObj);

