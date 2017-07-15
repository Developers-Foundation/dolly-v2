<div class="grey spacer">
</div>
<footer class="footer grey orange-text">
    <div class="container footerContainer hidden-xs">
        <div class="col-sm-4 white-text">
            <div class="centerer">
                <div class="footer-logo">
                    <img class="img img-responsive" src="assets/img/dolly-logo-white-250x56.png"/>
                </div>

                <div class="footer-info white-text">
                    <h3>Lagos, Nigeria</h3>
                    <p><a data-rel="external" href="html_elements/link.php?link=phone">
                            <?php echo file_get_contents("html_elements/link.php", false, stream_context_create(array('http' => array('method' => 'GET','header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => http_build_query(array('link' => 'phonePrint')))))); ?>
                        </a><br/>
                        <a data-rel="external" href="html_elements/link.php?link=email">info@dollychildren.org</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="footer-nav centerer">
                <h3>Navigate</h3>
                <ul>
                    <li><a href="/about">About <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="/impacts">Impact <i class="fa fa-chevron-right"></i></a></li>
                    <li><a>Blog <i class="fa fa-chevron-right"></i></a></li> <!-- TODO: Link to it :) -->
                    <li><a href="/contact">Contact <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="/donate">Donate <i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="social-area pull-right centerer">
                <h3>Connect With Us</h3>
                <ul>
                    <li>
                        <a href="html_elements/link.php?link=facebook" target="_blank "
                           class="btn btn-social btn-facebook btn-simple">
                            <i class="fa fa-social fa-2x fa-facebook"></i>Facebook
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=twitter" target="_blank "
                           class="btn btn-social btn-twitter btn-simple">
                            <i class="fa fa-social fa-2x fa-twitter"></i>Twitter
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=instagram" target="_blank "
                           class="btn btn-social btn-instagram btn-simple">
                            <i class="fa fa-social fa-2x fa-instagram"></i>Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container footerContainer visible-xs mobile">
        <div class="row">
            <div class="col-xs-6 v-center">
                <h3>Lagos, Nigeria</h3>
                <p><a data-rel="external" href="html_elements/link.php?link=phone">(234) 678-263-1273</a><br/>
                    <a data-rel="external" href="mailto:info@dollychildren.org">info@dollychildren.org</a>
                </p>
            </div>
            <div class="col-xs-6 text-right">
                <h3>Connect With Us</h3>
                <ul>
                    <li>
                        <a href="html_elements/link.php?link=facebook" target="_blank "
                           class="btn btn-social btn-facebook btn-simple">
                            Facebook<i class="fa fa-social fa-2x fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=twitter" target="_blank "
                           class="btn btn-social btn-twitter btn-simple">
                            Twitter<i class="fa fa-social fa-2x fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=instagram" target="_blank "
                           class="btn btn-social btn-instagram btn-simple">
                            Instagram<i class="fa fa-social fa-2x fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row text-center orange">
        <p class="madeWithLove">
            Copyright &copy; 2017 <a href="html_elements/link.php?link=dev">Developers' Foundation</a><span
                    class="hidden-xs">. </span>
            <span class="visible-xs hidden-md half-line-break"></span>
            Made with &#9829; &#9829;
        </p>
    </div>
</footer>