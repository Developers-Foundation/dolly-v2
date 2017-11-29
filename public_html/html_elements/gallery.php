
<!--

This module provides a 3 by x gallery for your images.
Images can be of any size; however, note that they are sorted by column,
therefore to place 3 images horizontally you need to place the images in three different columns.

This module also provides a lightbox to view the images; ensure the data-slide-to sections are
appropriately labelled if you wish to maintain the order of your photos.

Note: if you wish to create more columns change the col-md-4 class of each column,
      keep in mind that bootstrap divides a row into 12 columns, so if you wanted 4 columns
      you would change this value to col-md-3, and add an additional column.

-->

<div class="section gallery-content" id="gallery1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <div class="gallery">
                    <div class="row">

                        <!-- A column of the gallery -->
                        <div class="col-md-4">

                            <!-- An item in the gallery -->
                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="0" data-toggle="modal">
                                        <img src="//placehold.it/800x500" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="3" data-toggle="modal">
                                        <img src="//placehold.it/700x103" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                        </div>

                        <!-- A column of the gallery -->
                        <div class="col-md-4">
                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="1" data-toggle="modal">
                                        <img src="//placehold.it/800x501" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="4" data-toggle="modal">
                                        <img src="//placehold.it/700x104" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                        </div>

                        <!-- A column of the gallery -->
                        <div class="col-md-4">
                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="2" data-toggle="modal">
                                        <img src="//placehold.it/800x502" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="5" data-toggle="modal">
                                        <img src="//placehold.it/700x105" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
TODO: enter the number of images that are contained in your gallery
We assume that their data-slide-to values range from 0...n-1, for a gallery with n images.
-->
<?php
$NUM_IMAGES = 6;
?>

<!-- Lightbox -->
<div id="nob-lb-gallery" class="modal fade carousel slide carousel-fit" tabindex="-1" role="dialog"
     aria-labelledby="Photo Gallery"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <ol class="carousel-indicators">

                    <!-- We assume that the first image (index 0) is the active image -->
                    <li data-target="#nob-lb-gallery" data-slide-to="0" class="active"></li>

                    <!-- Create the rest of the links to the image targets (the selectors at the bottom of the box -->
                    <?php
                    for ($i = 1; $i < $NUM_IMAGES; $i++) {
                        echo '<li data-target="#nob-lb-gallery" data-slide-to="' . $i . '" class=""></li>';
                    }
                    ?>

                </ol>
                <div class="carousel-inner">

                    <!-- This is the active image, here we assume it is the first image in the gallery -->
                    <div class="item active">
                        <img alt="" src="//placehold.it/800x500">
                    </div>

                    <!-- If your images are in some numeric order when they are stored you can use this php
                    script to generate the div classes. Otherwise, copy and past the div tag with the correct
                    src (path to your file), in the order you want the pictures to appear. -->
                    <?php
                    for ($i = 1; $i < $NUM_IMAGES; $i++) {
                        echo '<div class="item"><img alt="" src="//placehold.it/800x50'.$i.'"></div>';
                    }
                    ?>
                </div>

                <!-- This allows you to move between the items using the arrow keys and mouse -->
                <a class="left carousel-control" href="#nob-lb-gallery" data-slide="prev"></a>
                <a class="right carousel-control" href="#nob-lb-gallery" data-slide="next"></a>
            </div>
        </div>
    </div>
</div>
