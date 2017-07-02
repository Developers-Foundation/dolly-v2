<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/2/17
 * Time: 11:11 PM
 */
?>

<div class="modal fade donate-modal" id="donate-payment" tabindex="-1" role="dialog" aria-labelledby="Donate Now"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Donate Now</h4>
            </div>
            <div class="modal-body">
                <form id="nob-paystack-card-form" class="paystack-form donate-form">
                <div class="donate-page-1">
                    <!-- TODO: What other field was here =,= totally forgot lol -->
                    <div class="donate-amount">
                        <h5>Amount Of</h5>
                        <div class="donate-amount-container row">
                            <div class="col-md-2">
                                <a class="donate-amount-select" data-amount="10">
                                    <div class="donate-amount-radio"><strong>$10</strong></div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="donate-amount-select" data-amount="30">
                                    <div class="donate-amount-radio"><strong>$30</strong></div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="donate-amount-select" data-amount="50">
                                    <div class="donate-amount-radio"><strong>$50</strong></div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="donate-amount-select" data-amount="130">
                                    <div class="donate-amount-radio"><strong>$130</strong></div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="donate-amount-select" data-amount="-1">
                                    <div class="donate-amount-radio"><strong>Other</strong></div>
                                </a>
                            </div>
                            <span class="stretch"></span>
                        </div>
                    </div>
                    <div class="donate-payment-info text-center">
                        <a id="donate-payment-info" class="button-red small">Payment Information</a>
                    </div>
                </div>
                <div class="donate-page-2 row hidden">
                    <!-- TODO: @minimike Can you help style this, tyvm -->
                    <!-- TODO: Add address section (so dolly can do some tracking etc) Also add hidden meta fields like IP address lol -->
                    <input type="text" data-paystack="amount" placeholder="amount in cents" class="form-input-amount"
                           pattern="\d*">
                    <input type="text" data-paystack="number" placeholder="card number" class="form-input-card"
                           pattern="\d*" maxlength="19">
                    <input type="text" data-paystack="name" placeholder="name" class="form-input-name"
                           pattern="[a-z]{1,25}">
                    <input type="text" data-paystack="email" placeholder="email" class="form-input-email"
                           pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
                    <input type="text" data-paystack="cvv" placeholder="cvv" class="form-input-cvv">
                    <input type="text" data-paystack="expiryMonth" placeholder="month" class="form-input-exp-m"
                           pattern="\d*" maxlength="2" data-valid-example="05">
                    <input type="text" data-paystack="expiryYear" placeholder="year" class="form-input-exp-y"
                           pattern="\d*" minlength="2" maxlength="4" data-valid-example="18">
                    <button type="submit" data-paystack="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
