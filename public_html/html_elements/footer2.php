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
                    <?php include_once "linkPrint.php"; ?>
                    <p><a data-rel="external" href="html_elements/link.php?link=phone"><?php echo $link["phonePrint"] ?></a><br/>
                        <a data-rel="external" href="html_elements/link.php?link=email"><?php echo $link["emailPrint"] ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="footer-nav centerer footer-margin">
                <ul>
                    <li><a href="/about">About <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="/impacts">Impact <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="html_elements/link.php?link=blog">Blog <i class="fa fa-chevron-right"></i></a></li> <!-- TODO: Link to it :) -->
                    <li><a href="/contact">Contact <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="/donate">Donate <i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="social-area pull-right centerer footer-margin">
                <ul>
                    <li>
                        <a href="html_elements/link.php?link=facebook" target="_blank "
                           class="btn btn-social btn-facebook btn-simple">
                            <i class="fa fa-social fa-2x fa-facebook"></i>Facebook
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=instagram" target="_blank "
                           class="btn btn-social btn-instagram btn-simple">
                            <i class="fa fa-social fa-2x fa-instagram"></i>Instagram
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=twitter" target="_blank "
                           class="btn btn-social btn-twitter btn-simple">
                             <i class="fa fa-social fa-2x fa-twitter"></i> Twitter
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
                <p>
                    <a class="white-text" data-rel="external" href="html_elements/link.php?link=phone">(234) 818-689-1611</a><br/>
                    <a class="white-text" data-rel="external" href="mailto:info@dollychildren.org">info@dollychildren.org</a>
                </p>
            </div>
            <div class="col-xs-6 text-right mobile-margin">
                <ul>
                    <li>
                        <a href="html_elements/link.php?link=facebook" target="_blank "
                           class="btn btn-social btn-facebook btn-simple">
                            Facebook <i class="fa fa-social fa-2x fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=instagram" target="_blank "
                           class="btn btn-social btn-instagram btn-simple">
                            Instagram <i class="fa fa-social fa-2x fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="html_elements/link.php?link=twitter" target="_blank "
                           class="btn btn-social btn-twitter btn-simple">
                            Twitter <i class="fa fa-social fa-2x fa-twitter"></i>
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