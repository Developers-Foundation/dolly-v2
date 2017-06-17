
<!--

This creates a simple mailer module
TODO: go into mailer.php and input your SendGrid API key
TODO: go into public_html/assets/js/nob.js and modify who the message is being sent to.

-->
<div style="padding:30px"></div>
<div class="" id="mailerForm">
    <div class="container contactUsContainer">


        <div class="row">

            <!-- The form for the mailer -->
            <form class="form-email" action="" method="post" data-form-type="nob">
                <div class="col-md-6 left">

                </div>

                <!-- Message input -->
                <div class="col-md-6 right">
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

