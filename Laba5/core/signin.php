<?php
session_start();
include_once('DB.php');
DB::getInstance();

$login = $_POST['user_login'];
$password = $_POST['user_pass'];

$_SESSION['login'] = $login;

$message = 'correct';

$isCorrect = true;
$error = "";

if(empty($login)){
    $error = "Логин не был введён <br>";
    $isCorrect = false;
}

if(empty($password)){
    $error .= "Пароль не был введён <br>";
    $isCorrect = false;
}

if(!$isCorrect)
    $message = $error;

if($isCorrect) {
    $password = md5($password);
    $check_user = DB::query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user) > 0) {
        //Авторизация прошла успешно
        $user = DB::fetch_array($check_user);
        $_SESSION['user'] = [
            'id_user' => $user['id_user'],
            'login' => $user['login'],
            'FIO' => $user['FIO'],
            'avatar_path' => $user['avatar_path'],
            'rights' => $user['rights']
        ];
    } else {
        //Авторизация не выполнена: не совпадает логин или пароль
        $message = "Неверный логин или пароль";
    }
}

$_SESSION['message'] = $message;

header("Location: ../signin.php");
