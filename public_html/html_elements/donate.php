<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/17/17
 * Time: 5:08 PM
 */
?>


<!-- DONATE SECTION -->
<div class="parallax">
    <a href="#donate-payment" data-toggle="modal" data-amount="10" class="donate-modal-trigger">
        <div id="donate-section-1" class="donate-section">
            <div class="container container-first">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="assets/img/donate/donuts.jpg">
                    </div>
                    <div class="col-md-6">

                        <p>
                            <label><input class="donate-box" type="radio" name="amount" value="10">
                                <i class="ui-checkbox"></i></label><br><br>
                            For the price of 12 donuts at Dunkin donuts, you can send <u>3 children</u> to school
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="#donate-payment" data-toggle="modal" data-amount="30" class="donate-modal-trigger">
        <div id="donate-section-2" class="donate-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <label><input class="donate-box" type="radio" name="amount" value="30">
                                <i class="ui-checkbox"></i></label><br><br>
                            For the price of Apple Earpods, you can provide books for <u>5 children</u>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="assets/img/donate/earbuds.jpg">
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="#donate-payment" data-toggle="modal" data-amount="50" class="donate-modal-trigger">
        <div id="donate-section-3" class="donate-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="assets/img/donate/phone_case.jpg">
                    </div>
                    <div class="col-md-6">
                        <p>
                            <label><input class="donate-box" type="radio" name="amount" value="50">
                                <i class="ui-checkbox"></i></label><br><br>
                            For the price of an Apple iPhone case, you can provide uniforms for <u>5 children</u>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="#donate-payment" data-toggle="modal" data-amount="130" class="donate-modal-trigger">
        <div id="donate-section-4" class="donate-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <label><input class="donate-box" type="radio" name="amount" value="130">
                                <i class="ui-checkbox"></i></label><br><br>
                            For the price of new shoes at Aldo, you can send <u>5 children to school</u>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="assets/img/donate/shoes.jpg">
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div id="donate-btn">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>
                Help make the lives of these children better
            </h1>
        </div>
        <!-- TODO: put it in less -->
        <div class="col-md-12 text-center" style="padding-bottom: 15px">
            <button class="button-red round big" type="submit" data-paystack="submit">Donate Now</button>
        </div>
    </div>
</div>

