<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="styles/projects.css">
        <link rel="stylesheet" href="styles/commonStyles.css">
        <link rel="stylesheet" href="styles/fonts.css">

        <script src="scripts/jquery-3.6.0.js"></script>
        <script src="scripts/gallery.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <?php include("header.php");?>
            <div class="contentContainer">
                <div class="gallery">
                    <img class="arrow" src="images/gallery/arrowLeft.png" onclick="changeImageLeft();">
                    <!--<img class="galleryImage" id="mainImage" src="images/gallery/0.png">!-->

                    <div class="imageMatrix" id="mainImage">
                    </div>

                    <img class="arrow" src="images/gallery/arrowRight.png" onclick="changeImageRight();">
                </div>
            </div>
        </div>

    </body>

</html>