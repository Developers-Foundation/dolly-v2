
<!--

This creates a simple mailer module
TODO: go into mailer.php and input your SendGrid API key
TODO: go into public_html/assets/js/nob.js and modify who the message is being sent to.

-->

<div class="section suggestion-section header-filter" id="mailerForm">
    <div class="container contactUsContainer">

        <!-- Text prompt for the mailer form -->
        <div class="title text-center contactUsText">
            <h2><strong>Contact Us</strong></h2>
            <hr>
            <small>We love getting emails.</small>
            <small>Please send us an email.</small>
            <p><br></p>
        </div>

        <div class="row">

            <!-- The form for the mailer -->
            <form class="form-email" action="" method="post" data-form-type="nob">
                <div class="col-md-6 left">

                    <!-- Name input -->
                    <div class="input-group">
		                    <span class="input-group-addon">
			                    <i class="fa fa-user contactIcon"></i>
		                    </span>
                        <input type="text" class="form-control form-input-name" placeholder="Your Name">
                    </div>

                    <!-- Email input -->
                    <div class="input-group">
		                    <span class="input-group-addon">
			                    <i class="fa fa-envelope contactIcon"></i>
		                    </span>
                        <input type="text" class="form-control form-input-email" placeholder="Your Email">
                    </div>
                </div>

                <!-- Message input -->
                <div class="col-md-6 right">
                            <textarea class="form-control form-input-message" placeholder="Your Message"
                                      rows="5"></textarea>
                </div>

                <!-- Submit button -->
                <div class="col-md-12 text-center">
                    <button class="btn btn-raised btn-success btn-lg">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
