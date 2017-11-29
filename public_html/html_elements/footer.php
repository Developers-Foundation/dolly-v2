
<!--

A simple footer module providing social media links as well as links to other pages and modals.

-->

<nav id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="list-inline text-center h4">

                    <!-- Links to other pages -->
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">FAQ</a></li>

                    <!-- Links to modals (which can be included as their own modules, or at the bottom of this page) -->
                    <li><a href="#" data-toggle="modal" data-target="#ContactUs">Contact Us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#testModal">Terms of Service</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#">Privacy Policy</a></li>

                </ul>
            </div>
            <hr style="width: 60%;clear: both;">

            <!-- Social media icons -->
            <div class="col-sm-12">
                <ul class="footer-social list-inline text-center">
                    <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="col-sm-12 text-center" id="footerText">
                <p>Copyright &copy; 2016. Developers' Foundation. All rights reserved.</a></p>
            </div>
        </div>
    </div>
</nav>


<!-- Example modal -->

<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="testModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal name -->
            <div class="modal-header">
                <h4 class="modal-title">Example Modal</h4>
            </div>

            <!-- Modal content -->
            <div class="modal-body">
                <div class='innerText'>
                    Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.
                </div>
                <span id='infoCo'></span><br>
                <div class='grayText'><strong>What a great modal.</strong></div>
                <br/>
                <div class='innerText'>It's just wonderful, isn't it?</div>
            </div>

        </div>
    </div>
</div>
