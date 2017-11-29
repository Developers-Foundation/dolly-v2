<!--

This module provides a gallery of triangular images that can be tessellated together.
This module relies on code in main.js in order to properly function with resizing windows.

-->


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000" height="200" id="svg1">
    <defs>

        <!-- Clip paths are used to create the triangles. Any polygon can be created by altering the points -->

        <!-- Equilateral Triangle -->
        <clipPath id="clip1">
            <polygon points="50,0 0,100 100,100" fill="" id="poly1">  <!-- Coordinate system is x,y with 0,0 being the top left corner -->
        </clipPath>

        <!-- Upside down Equilateral Triangle -->
        <clipPath id="clip2">
            <polygon points="0,0 100,0 50,100" fill="" id="poly2">
        </clipPath>

        <!-- Right Angle Triangle (Right) -->
        <clipPath id="clip3">
            <polygon points="50,0 50,100 0,100" fill="" id="poly3">
        </clipPath>

        <!-- Right Angle Triangle (Left) -->
        <clipPath id="clip4">
            <polygon points="50,0 50,100 100,100" fill="" id="poly4">
        </clipPath>
    </defs>

    <!-- We create each image and assign the required variables.
    Important variable to note are the clip-path (to create the triangle) and translate (so they aren't all overlapping) -->
    <image xlink:href="//placehold.it/500x500" clip-path="url(#clip1)" id="im1"></image>
    <image xlink:href="//placehold.it/501x501" clip-path="url(#clip2)" id="im2"></image>
    <image xlink:href="//placehold.it/502x502" clip-path="url(#clip1)" id="im3"></image>
    <image xlink:href="//placehold.it/503x503" clip-path="url(#clip2)" id="im4"></image>
    <image xlink:href="//placehold.it/504x504" clip-path="url(#clip1)" id="im5"></image>

    <!-- Ends before right angles-->
    <image xlink:href="//placehold.it/501x501" clip-path="url(#clip2)" id="im0"></image>
    <image xlink:href="//placehold.it/503x503" clip-path="url(#clip2)" id="im6"></image>

    <!-- Right angled ends -->
    <image xlink:href="//placehold.it/499x499" clip-path="url(#clip3)" id="imL1"></image>
    <image xlink:href="//placehold.it/505x505" clip-path="url(#clip4)" id="imR1"></image>
</svg>

