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
                <form id="nob-paystack-card-form" class="paystack-form donate-form text-center">
                <div class="donate-page-1">
                    <!-- TODO: What other field was here =,= totally forgot lol -->
                    <div class="donate-amount">
                        <h4>What type of donation would you like to make?</h4><br>
                        <div class="row">
                            <div class="slider-switch">
                                <div class="left selected" data-item="month">Monthly</div>
                                <div class="right" data-item="one">One-Time</div>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-md-6">
                                <label><input class="donate-box" type="radio" name="payment-type" value="once">
                                    <i class="ui-checkbox"> One time</i></label><br>
                            </div>
                            <div class="col-md-6">
                                <label><input class="donate-box" type="radio" name="payment-type" value="monthly">
                                    <i class="ui-checkbox"> Monthly</i></label><br>
                            </div>
                        </div>-->
                        <h4>How much would you like to donate?</h4><br>
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
                    <br>
                    <div class="donate-payment-info text-center">
                        <a id="donate-payment-info" class="button-red small round">Payment Information</a>
                    </div>
                </div>
                <div class="donate-page-2 row hidden">
                    <!-- TODO: @minimike Can you help style this, tyvm -->
                    <!-- TODO: Add address section (so dolly can do some tracking etc) Also add hidden meta fields like IP address lol -->
                    <!-- Donor info -->
                    <div class="row text-left">
                        <div class="col-md-12">
                            <h3>Donor Information:</h3>
                        </div>
                        <div class="col-md-6" style="padding: 0 15px">
                            <h5>First name:</h5>
                            <input type="text"
                                   data-paystack="name-first"
                                   placeholder="John"
                                   class="form-input-name-first donate-form"
                                   pattern="[a-z]{1,25}">
                        </div>
                        <div class="col-md-6" style="padding: 0 15px">
                            <h5>Last name:</h5>
                            <input type="text"
                                   data-paystack="name-Last"
                                   placeholder="Doe"
                                   class="form-input-name-Last donate-form"
                                   pattern="[a-z]{1,25}">
                        </div>
                        <div class="col-md-6" style="padding: 0 15px">
                            <h5>Email:</h5>
                            <input type="text"
                                   data-paystack="email"
                                   placeholder="email"
                                   class="form-input-email donate-form"
                                   pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
                        </div>
                        <div class="col-md-6" style="padding: 0 15px">
                            <h5>Phone number:</h5>
                            <input
                                    type="text"
                                    data-paystack="number-phone"
                                    placeholder="Phone number"
                                    class="form-input-number-phone donate-form"
                                    pattern="\d*"
                                    maxlength="19" >
                        </div>
                        <div class="col-md-8">
                            <h5>Address:</h5>
                            <input
                                    type="text"
                                    data-paystack="address"
                                    placeholder="123 Hello Street"
                                    class="form-input-address donate-form">
                        </div>
                        <div class="col-md-4">
                            <h5>Apt. Suite, etc:</h5>
                            <input
                                    type="text"
                                    data-paystack="address-opt"
                                    placeholder="Unit 123"
                                    class="form-input-address-opt donate-form">
                        </div>
                        <div class="col-md-8">
                            <h5>City:</h5>
                            <input type="text"
                                   data-paystack="city"
                                   placeholder="New York"
                                   class="form-input-city donate-form"
                                   pattern="[a-z]{1,50}">
                        </div>
                        <div class="col-md-4">
                            <h5>Postal Code:</h5>
                            <input type="text"
                                   data-paystack="postal"
                                   placeholder="12345678"
                                   class="form-input-postal donate-form">
                        </div>
                        <div class="col-md-6" style="padding: 0 15px">
                            <h5>Country:</h5>
                            <input type="text"
                                   data-paystack="city"
                                   placeholder="Nigeria"
                                   class="form-input-country donate-form"
                                   pattern="[a-z]{1,50}">
                        </div>
                        <div class="col-md-6" style="padding: 0 15px">
                            <h5>State/Province:</h5>
                            <input type="text"
                                   data-paystack="state"
                                   placeholder="New York"
                                   class="form-input-state donate-form"
                                   pattern="[a-z]{1,50}">
                        </div>
                    </div>
                    <!-- Card info -->
                    <div class="row text-left">
                        <div class="col-md-12">
                            <h3>Card Information:</h3>
                        </div>
                        <div class="col-md-12">
                            <h5>Name on card:</h5>
                            <input type="text"
                                   data-paystack="name"
                                   placeholder="name"
                                   class="form-input-name donate-form"
                                   pattern="[a-z]{1,25}">
                        </div>
                        <div class="col-md-8">
                            <h5>Card Number:</h5>
                            <input type="text"
                                   data-paystack="number"
                                   placeholder="card number"
                                   class="form-input-card donate-form"
                                   pattern="\d*" maxlength="19">
                        </div>
                        <div class="col-md-4">
                            <h5>CVV:</h5>
                            <input type="text"
                                   data-paystack="cvv"
                                   placeholder="cvv"
                                   class="form-input-cvv donate-form">
                        </div>
                        <div class="col-md-4">
                            <h5>Expiry month:</h5>
                            <input type="text"
                                   data-paystack="expiryMonth"
                                   placeholder="month"
                                   class="form-input-exp-m donate-form"
                                   pattern="\d*"
                                   maxlength="2"
                                   data-valid-example="05">
                        </div>
                        <div class="col-md-4">
                            <h5>Expiry year:</h5>
                            <input type="text"
                                   data-paystack="expiryYear"
                                   placeholder="year"
                                   class="form-input-exp-y donate-form"
                                   pattern="\d*"
                                   minlength="2"
                                   maxlength="4"
                                   data-valid-example="18">
                        </div>
                        <div class="col-md-4">
                            <h5>Pin/Opt:</h5>
                            <input type="text"
                                   data-paystack="pin"
                                   placeholder="pin"
                                   class="form-input-pin donate-form"
                                   pattern="\d*">
                        </div>
                       <div class="col-md-12 text-center">
                           <br>
                           <div class="g-recaptcha" data-sitekey="6Lc26iUUAAAAAIfNogCJ6XOd1vOLEX_sbjZ5ORr_"></div>
                           <br>
                           <button type="submit" class="button-red round" data-paystack="submit">Submit</button>
                       </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>