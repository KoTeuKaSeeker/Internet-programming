<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="styles/commonStyles.css">
        <link rel="stylesheet" href="styles/fonts.css">
        <link rel="stylesheet" href="styles/game.css">

        <script src="scripts/jquery-3.6.0.js"></script>
        <script src="scripts/game.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <?php include_once('header.php');?>
            <div class="contentContainer">
                <div class="fullSizeContainer centerContainer">
                    <div class="diffHeaderContainer textContainerBackground">
                        <img class="diffHeaderIcon diffHeaderIconMargin" src="images/catLogo.png">
                        <div class="jetBrainsHeaderFont diffHeaderText">Найдите различия</div>
                        <img class="diffHeaderIcon diffHeaderIconMargin" src="images/catLogo.png">
                    </div>

                    <div class="diffImageContainer"">
                        <div class="diffImageMargin relativePosition" id="leftImageContainer">
                            <img class="diffImage" src="images/bgAbout.jpg" draggable="false" id="leftImage">
                        </div>
                        <div class="diffImageMargin relativePosition" id="rightImageContainer">
                            <img class="diffImage" src="images/bgProjects.jpg" draggable="false" id="rightImage">
                        </div>
                    </div>

                    <div class="flexContainer">
                        <div class="textContainerBackground flexContainer">
                            <div class="jetBrainsFont scoreText">Количество очков: </div>
                            <div class="jetBrainsFont scoreText" id="score"> 0</div>
                        </div>

                        <div class="textContainerBackground flexContainer buttonMargin">
                            <div class="jetBrainsFont scoreText">Осталось отличий: </div>
                            <div class="jetBrainsFont scoreText" id="countDiff">0</div>
                        </div>

                        <div class="textContainerBackground flexContainer buttonMargin">
                            <div class="jetBrainsFont scoreText">Попыток: </div>
                            <div class="jetBrainsFont scoreText" id="countTry">0</div>
                        </div>

                        <button class="borderedContainer button jetBrainsFont scoreText buttonMargin" onclick="setRandomImage(true);">Другие изображения</button>
                    </div>

                    <div class="textContainerBackground jetBrainsFont scoreText winMargin" id="winText">
                    </div>
                </div>
            </div>
        </div>


    </body>

</html>