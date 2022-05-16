<html>

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Главная</title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/fonts.css"
    </head>

    <body>
        <div class="wrapper">

        <?php include('header.php'); ?>

            <div class="imageContainer">
                <div class="centerContainer">
                    <div class="linerCenterContainer">
                        <div class="centerTextContainer">

                            <div class="welcomeMainText">
                                <img class="logoCenterTextContainer" src="images/catLogo.png">
                                <h1><b class="jetBrainsHeaderFont">Добро пожаловать!</b></h1>
                            </div>

                            <div>
                                <p class="textUnderWelcomeText">Это сайт, на которой я<br> рассказываю о себе</p>
                            </div>
                        </div>
                        <div class="centerButtonContainer">
                            <button class="mainButton" onClick="document.location = 'about.php'">О себе</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>