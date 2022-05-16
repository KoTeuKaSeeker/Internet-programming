<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="styles/registration.css">
        <link rel="stylesheet" href="styles/commonStyles.css">
        <link rel="stylesheet" href="styles/fonts.css">
        <link rel="stylesheet" href="styles/signin.css">
    </head>

    <body>

    <div class="wrapper">

        <?php include('header.php'); ?>
        <div class="contentContainer centerContent">
            <div class="textContainerBackground centerContent">
                <?php

                if($_SESSION['message'] != "correct") {
                    include("signinForm.php");
                } else {
                    header('Location: main.php');
                }
                ?>
            </div>
        </div>

        <?php
            unset($_SESSION['message']);
            unset($_SESSION['login']);
        ?>
    </body>

</html>