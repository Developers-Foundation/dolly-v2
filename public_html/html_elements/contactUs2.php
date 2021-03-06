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
                    <p class="msg-info msg-info-padding">
                        Dolly Children Foundation
                    </p>
                    <br />
                    <p class="msg-info">
                        E:
                        <a data-rel="external" href="mailto:info@dollychildren.org">info@dollychildren.org</a><br/>
                        P:
                        <a data-rel="external" href="html_elements/link.php?link=phone">(234) 818-689-1611</a>
                    </p>
                    <br/>
                    <p>
                        If you have any inquiries, suggestions, or concerns, please do not hesitate to get in touch
                        with us. We look forward to hearing from you!
                    </p>
                </div>

                <!-- Message input -->
                <div class="col-md-offset-1 col-md-6 right">
                    <!-- Name input -->
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="msg-label"> Your Name</h4>
                            <div class="input-group fullWidth">
                                <input type="text" class="form-control form-input-name" required>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="col-md-6">
                            <h4 class="msg-label"> Email Address</h4>
                            <div class="input-group fullWidth">
                                <input type="email" class="form-control form-input-email" required>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <h4 class="msg-label"> Message</h4>
                    <textarea class="form-control form-input-message " rows="3" required></textarea>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="g-recaptcha" data-sitekey="6Lc26iUUAAAAAIfNogCJ6XOd1vOLEX_sbjZ5ORr_"></div>
                        </div>
                        <div class="col-md-4">
                            <!-- Submit button -->
                            <button class="btn btn-raised button-red  white-text btn-lg">SEND INQUIRY</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

