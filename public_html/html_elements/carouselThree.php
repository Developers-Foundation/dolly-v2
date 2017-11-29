
<!--

This module is a carousel displaying three images at a time.
You may include as many photos as you wish in this carousel.

-->


<div class="section" id="threeCarousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-carousel three-carousel">
                    <div class="carousel slide three" id="teamCarousel" data-ride="carousel" style="padding-top: 25px;">

                        <!-- Used to determine the order of photos in the carousel -->
                        <ol class="carousel-indicators hidden-sm-down">
                            <li data-target="#teamCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#teamCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#teamCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#teamCarousel" data-slide-to="3" class=""></li>
                            <li data-target="#teamCarousel" data-slide-to="4" class=""></li>
                            <li data-target="#teamCarousel" data-slide-to="5" class=""></li>
                        </ol>

                        <div class="carousel-inner carouselViewWindow">

                            <!-- The active item is the item that will be in focus by default -->
                            <div class="item active">
                                <div class="col-md-4">
                                    <a href="#">
                                        <img src="//placekitten.com/g/600/601" class="img-responsive">

                                        <!-- To add captions use the following tag -->
                                        <div class="carousel-caption">
                                            <h4>Sample caption</h4>
                                            <h4>Another sample caption line</h4>
                                        </div>

                                    </a>
                                </div>
                            </div>

                            <!-- Entries for each item in the carousel -->
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="#">
                                        <img src="//placekitten.com/g/600/602" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="#">
                                        <img src="//placekitten.com/g/600/603" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="#">
                                        <img src="//placekitten.com/g/600/604" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="#">
                                        <img src="//placekitten.com/g/600/605" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="#">
                                        <img src="//placekitten.com/g/600/606" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- This allows you to move between the items using the arrow keys and mouse -->
                        <a class="left carousel-control" href="#teamCarousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#teamCarousel" data-slide="next"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
