<!--

This creates a simple mailer module
TODO: go into mailer.php and input your SendGrid API key
TODO: go into public_html/assets/js/nob.js and modify who the message is being sent to.

-->


<div class="" id="mailerForm">
    <div class="container contactUsContainer">


        <div class="row">

            <!-- The form for the mailer -->
            <form class="form-email" action="" method="post" data-form-type="nob">
                <div class="col-md-5 left msg-info">
                    <h3 class="msg-info">
                        E: augustine_stark@gmail.com<br/>
                        P: (+234) 708-739-0017

                    </h3>

                    <br/>
                    <h3>
                        LCD screens are uniquely modern in style, and the liquid crystals that make them work have
                        allowed humanity to create slimmer, more portable technology than we’ve ever had access to
                        before.
                    </h3>
                </div>

                <!-- Message input -->
                <div class="col-md-offset-1 col-md-6 right">
                    <!-- Name input -->
                    <div class="row">
                        <div class="col-md-6" style="padding:0px;">
                            <h4 class="msg-label"> Your Name</h4>
                            <div class="input-group">
                                <input type="text" class="form-control form-input-name" required>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="col-md-6">
                            <h4 class="msg-label"> Email Address</h4>
                            <div class="input-group">
                                <input type="email" class="form-control form-input-email" required>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <h4 class="msg-label"> Message</h4>
                    <textarea class="form-control form-input-message " rows="3" required></textarea>

                    <div class="g-recaptcha" data-sitekey="6Lc26iUUAAAAAIfNogCJ6XOd1vOLEX_sbjZ5ORr_"></div>

                    <!-- Submit button -->
                    <div class="text-right">
                        <button class="btn btn-raised btn-grey btn-lg">SEND INQUIRY</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
