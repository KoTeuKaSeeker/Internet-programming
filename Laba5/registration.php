<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="styles/registration.css">
        <link rel="stylesheet" href="styles/registrationBackground.css">
        <link rel="stylesheet" href="styles/commonStyles.css">
        <link rel="stylesheet" href="styles/fonts.css">
    </head>

    <body>
        <div class="wrapper">

            <?php include('header.php');
            $_SESSION['pathToAction'] = "core/user.php";
            $_SESSION['isEdit'] = false;
            ?>
            <div class="contentContainer centerContent">
                    <div class="textContainerBackground centerContent">
                        <?php
                        if($_SESSION['message'] != "correct")
                            include_once("registrationForm.php");
                        else {
                            ?>
                            <div class="jetBrainsHeaderFont headerText">Пользователь зарегестрирован!</div>
                            <button class="buttonPadding jetBrainsFont borderedContainer button textRegistration" onclick="document.location = 'signin.php'">Войти в аккаунт</button>';
                        <?php
                        }
                        unset($_SESSION['login']);
                        unset($_SESSION['message']);
                        unset($_SESSION['FIO']);
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>