
<!--

A footer module providing three different functionalities:
  1) Text section
  2) Twitter feed
  3) RSS feed

TODO: enter your twitter feed id
TODO: enter your RSS feed address

-->

<footer class="footer footerTicker" id="footerTicker">

    <div class="footer-top"></div>

    <div class="footer-main">
        <div class="container">
            <p><br></p>
            <div class="row">

                <!-- Text section -->
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4 class="footer-title">About us<span class="title-under"></span></h4>
                        <div class="footer-content">
                            <p>
                                Lorem ipsum dolor sit amet, ne quas soleat interpretaris mel.
                                Cu quo vide eruditi iracundia, has eu feugait noluisse. Ad
                                amet recteque laboramus vim, sea nominavi legendos at. Per ut
                                ullum imperdiet, fierent mediocrem ad sit.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, ne quas soleat interpretaris mel.
                                Cu quo vide eruditi iracundia, has eu feugait noluisse. Ad
                                amet recteque laboramus vim, sea nominavi legendos at. Per ut
                                ullum imperdiet, fierent mediocrem ad sit.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Twitter feed -->
                <div class="col-md-4 footer3">
                    <div class="footer-col">
                        <h4 class="footer-title">TWITTER FEED<span class="title-under"></span></h4>

                        <!--
                        To use this twitter feed you must set up your twitter widget and get a data-widget id,
                        this can be done here: https://twitter.com/settings/widgets

                        TODO: add your id to the data-widget-id section
                        -->

                        <a class="twitter-timeline" href="https://twitter.com/YOUR_TWITTER"
                           data-widget-id="NEED AN ID HERE">Tweets by @INSERT_NAME</a>
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + "://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");</script>
                    </div>
                </div>

                <!-- RSS feed -->
                <div class="col-md-4 footer3">
                    <div class="footer-col">
                        <h4 class="footer-title">RSS FEED<span class="title-under"></span></h4>

                        <!-- Start feedwind code -->
                        <script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' +
                                ('https:' == document.location.protocol ? 'https://' : 'http://') +
                                'feed.mikle.com/js/rssmikle.js">\x3C/script>');
                        </script>
                        <script type="text/javascript">(function () {
                                var params = {

                                    // TODO: alter the below line to the address of your rss feed
                                    rssmikle_url: "https://news.google.ca/?output=rss",
                                    rssmikle_frame_width: "100%",
                                    rssmikle_frame_height: "400",
                                    frame_height_by_article: "0",
                                    rssmikle_target: "_blank",
                                    rssmikle_font: "Arial, Helvetica, sans-serif",
                                    rssmikle_font_size: "12",
                                    rssmikle_border: "off",
                                    responsive: "off",
                                    rssmikle_css_url: "",
                                    text_align: "left",
                                    text_align2: "left",
                                    corner: "off",
                                    scrollbar: "on",
                                    autoscroll: "on",
                                    scrolldirection: "up",
                                    scrollstep: "3",
                                    mcspeed: "20",
                                    sort: "Off",
                                    rssmikle_title: "off",
                                    rssmikle_title_sentence: "",
                                    rssmikle_title_link: "",
                                    rssmikle_title_bgcolor: "#0066FF",
                                    rssmikle_title_color: "#FFFFFF",
                                    rssmikle_title_bgimage: "",
                                    rssmikle_item_bgcolor: "ghostwhite",
                                    rssmikle_item_bgimage: "",
                                    rssmikle_item_title_length: "55",
                                    rssmikle_item_title_color: "#0066FF",
                                    rssmikle_item_border_bottom: "on",
                                    rssmikle_item_description: "on",
                                    item_link: "off",
                                    rssmikle_item_description_length: "150",
                                    rssmikle_item_description_color: "#666666",
                                    rssmikle_item_date: "gl1",
                                    rssmikle_timezone: "Etc/GMT",
                                    datetime_format: "%b %e, %Y %l:%M %p",
                                    item_description_style: "text+tn",
                                    item_thumbnail: "full",
                                    item_thumbnail_selection: "auto",
                                    article_num: "15",
                                    rssmikle_item_podcast: "off",
                                    keyword_inc: "",
                                    keyword_exc: ""
                                };
                                feedwind_show_widget_iframe(params);
                            })();
                        </script>

                        <div style="font-size:10px; text-align:center; width:100%;">
                            <a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container text-right">
            Developer's Foundation
        </div>
    </div>

</footer>



