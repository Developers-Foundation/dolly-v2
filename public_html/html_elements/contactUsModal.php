
<!--

This creates a simple mailer modal module
TODO: go into mailer.php and input your SendGrid API key
TODO: go into public_html/assets/js/nob.js and modify who the message is being sent to.

-->

<div class="modal fade" id="ContactUs" tabindex="-1" role="dialog" aria-labelledby="Contact Us"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Contact Us</h4>
            </div>
            <div class="modal-body row">
                <form class="form-email" action="" method="post" data-form-type="nob">
                    <div class="col-md-6 left">

                        <!-- Name input -->
                        <div class="input-group">
		                    <span class="input-group-addon">
			                    <i class="fa fa-user contactIcon"></i>
		                    </span>
                            <input type="text" id="your-name" class="form-control form-input-name" placeholder="Your Name">
                        </div>

                        <!-- Email input -->
                        <div class="input-group">
		                    <span class="input-group-addon">
			                    <i class="fa fa-envelope contactIcon"></i>
		                    </span>
                            <input type="text" id="email" class="form-control form-input-email" placeholder="Your Email">
                        </div>
                    </div>

                    <!-- Message input -->
                    <div class="col-md-6 right">
                            <textarea id="your-message" class="form-control form-input-message" placeholder="Your Message"
                                      rows="5"></textarea>
                    </div>

                    <!-- Submit button -->
                    <div class="col-md-12 text-center">
                        <button class="button button--nuka button--round-s button--text-thick button--size-l" style="color: #FFFFFF">Send</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
