<?php
session_start();
include_once('DB.php');
DB::getInstance();

$login = htmlspecialchars($_POST['user_login']);
$FIO = htmlspecialchars($_POST['user_FIO']);
$password = htmlspecialchars($_POST['user_pass']);
$password_repeat = htmlspecialchars($_POST['user_pass2']);

$error = "";

//Проверка наличия логина
if(empty($login)) {
    $error = "Логин не должен быть пустым <br>";
    $isDataCorrect = false;
}

//Проверка наличия ФИО
if(empty($login)) {
    $error .= "ФИО не должено быть пустым <br>";
    $isDataCorrect = false;
}

//Проверка наличия пароля
if(empty($password)) {
    $error .= "Пароль не должен быть пустым <br>";
    $isDataCorrect = false;
}

//Проверка совпадения пароля
if($password != $password_repeat) {
    $error .= "Пароль не совпадает <br>";
    $isDataCorrect = false;
}

//Проверка повторения логина в базе данных
$check_user = DB::query("SELECT * FROM `users` WHERE `login` = '$login'");
if(mysqli_num_rows($check_user) > 0) {
    //Пользователь с таким логином уже существует
    $error .= "Пользователь с таким логином уже существует";
    $isDataCorrect = false;
}

//Если регистрация прошла успешно
if(empty($error)) {

    //Загрузка изображения
    $path = "uploads/" . time() . $_FILES['user_avatar']['name'];
    if (!move_uploaded_file($_FILES['user_avatar']['tmp_name'], "../" . $path)) {
        $path = "images/Avatars/defaultAvatar.png";
    }

    //Создание записи в базе данных
    $password = md5($password);
    DB::query("INSERT INTO `users` (`id_user`, `login`, `FIO`, `rights`, `password`, `avatar_path`) VALUES (NULL, '$login', '$FIO', 'Гость', '$password', '$path')");
}

$message = "correct";
if(!empty($error))
    $message = $error;

//Передача сообщения и логина в сессию
$_SESSION['message'] = $message;
$_SESSION['login'] = $login;
$_SESSION['FIO'] = $FIO;

header("Location: ../registration.php");
