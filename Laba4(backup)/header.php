<?php session_start();?>
<link rel="stylesheet" href="styles/header.css">
<link rel="stylesheet" href="styles/fonts.css">
<div class="header">

    <div class="logoContainer">
        <img class="logo" src="images/catLogo.png">
    </div>

    <div class="navigationContainer">
        <nav class="navigation">
            <ul>
                <li> <button class="headerButton jetBrainsFont navigationFont" onclick="document.location = 'main.php'">Главная</button></li>
                <li> <button class="headerButton jetBrainsFont navigationFont" onClick="document.location = 'about.php'">О себе</button></li>
                <li> <button class="headerButton jetBrainsFont navigationFont" onClick="document.location = 'profession.php'">Моя профессия</button></li>
                <li> <button class="headerButton jetBrainsFont navigationFont" onClick="document.location = 'projects.php'">Проекты</button></li>

                <?php
                if(!$_SESSION['user']) {
                ?>
                <li> <button class="headerButton jetBrainsFont navigationFont" onClick="document.location = 'registration.php'">Регистрация</button></li>
                <li> <button class="headerButton jetBrainsFont navigationFont" onClick="document.location = 'signin.php'">Войти</button></li>

                <?php
                } else {
                ?>
                    <?php
                    if($_SESSION['user']['rights'] == "Админ") {
                    ?>
                    <li> <button class="headerButton jetBrainsFont navigationFont adminMenuText" onClick="document.location = 'adminMenu.php'">Список участников</button></li>
                        <?php
                    }
                    ?>

                        <li> <button class="headerButton jetBrainsFont navigationFont quitText" onClick="document.location = 'core/quitAccount.php'">Выйти</button></li>
                    <li>
                        <div class="jetBrainsHeaderFont headerFont"><?=$_SESSION['user']['FIO']?></div>
                    </li>

                    <li>
                        <img class="avatarImage" title="Аватарка пользователя" src=<?=$_SESSION['user']['avatar_path']?>>
                    </li>
                <?php
                }
                ?>
<!--                <div>-->
<!--                    <li>-->
<!--                        <svg viewBox="0 0 24 24" class="navigationIcon">-->
<!--                            <circle cx="12" cy="5.5" r="2.5"></circle>-->
<!--                            <path d="M15 10H9a4 4 0 0 0-4 4v7h14v-7a4 4 0 0 0-4-4z"></path>-->
<!--                        </svg>-->
<!--                    </li>-->
<!--                </div>-->
            </ul>
        </nav>
    </div>
</div>