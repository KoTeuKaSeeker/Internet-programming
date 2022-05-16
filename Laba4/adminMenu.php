<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="styles/commonStyles.css">
        <link rel="stylesheet" href="styles/fonts.css">
        <link rel="stylesheet" href="styles/adminMenu.css">
        <link rel="stylesheet" href="styles/registration.css">
    </head>

    <body>
        <div class="wrapper">
            <?php
            include_once('header.php');
            $_SESSION['pathToAction'] = "core/editAction.php";

            if($_SESSION['user']['rights'] != "Админ") {
                header("Location: main.php");
            }

            if(!$_SESSION['isEdit']) {
                include_once('usersList.php');
            } else {
                ?>
                <div class="contentContainer centerContent">
                    <div class="textContainerBackground centerContent">
                    <?php
                    include_once('registrationForm.php');
                    ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </body>

</html>