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
                        <div class="donate-amount">

                            <h4>How much would you like to donate? (USD)</h4><br>
                            <div class="donate-amount-container row">
                                <div class="smooth col-md-2">
                                    <a class="donate-amount-select" data-amount="10">
                                        <div class="donate-amount-radio"><strong>$10</strong></div>
                                    </a>
                                </div>
                                <div class="smooth col-md-2">
                                    <a class="donate-amount-select" data-amount="30">
                                        <div class="donate-amount-radio"><strong>$30</strong></div>
                                    </a>
                                </div>
                                <div class="smooth col-md-2">
                                    <a class="donate-amount-select" data-amount="50">
                                        <div class="donate-amount-radio"><strong>$50</strong></div>
                                    </a>
                                </div>
                                <div class="smooth col-md-2">
                                    <a class="donate-amount-select" data-amount="130">
                                        <div class="donate-amount-radio"><strong>$130</strong></div>
                                    </a>
                                </div>
                                <div class="smooth col-md-2">
                                    <a class="donate-amount-select" data-amount="-1">
                                        <div class="donate-amount-radio"><strong>Other</strong></div>
                                    </a>
                                </div>
                                <div class="smooth col-md-10 hidden">
                                    <label>$</label>
                                    <input type="number" class="donate-other-amount">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="3ds-form-button" class="donate-payment-info text-center">
                            <a style="font-size: 18px;" id="donate-payment-info" class="button-red small round"> Donate </a>
                        </div>
                    </div>
                </form>

                <form id="3ds-form" style="display:none">
                    <div id="3ds-message"></div>
                    <button id="3ds-form-button" type="submit" data-paystack="submit">Continue</button>
                </form>

            </div>
        </div>
    </div>
</div>
