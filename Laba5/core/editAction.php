<?php
session_start();
include_once('DB.php');
DB::getInstance();

$login = htmlspecialchars($_POST['user_login']);
$password = htmlspecialchars($_POST['user_pass']);
$FIO = htmlspecialchars($_POST['user_FIO']);
$rights = $_POST['user_rights'] ? "Админ" : "Гость";

$error = "";

//Проверка наличия логина
if(empty($login)) {
    $error = "Логин не должен быть пустым <br>";
    $isDataCorrect = false;
}

//Проверка наличия пароля
if(empty($password)) {
    $error .= "Пароль не должен быть пустым <br>";
    $isDataCorrect = false;
}

//Проверка повторения логина в базе данных
if($login != $_SESSION['editingUser']['login']) {
    $check_user = DB::query("SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {
        //Пользователь с таким логином уже существует
        $error .= "Пользователь с таким логином уже существует";
        $isDataCorrect = false;
    }
}

//Если регистрация прошла успешно
if(empty($error)) {

    $editingUser = $_SESSION['editingUser'];
    $idEditingUser = $editingUser['id_user'];

    //Загрузка изображения
    $path = "uploads/" . time() . $_FILES['user_avatar']['name'];
    if (!move_uploaded_file($_FILES['user_avatar']['tmp_name'], "../" . $path)) {
        $path = "images/Avatars/defaultAvatar.png";
    }

    $password = md5($password);
    //Создание записи в базе данных
    DB::query("UPDATE `users` SET `login`='$login', `rights`='$rights', `password`='$password', `FIO`='$FIO', `avatar_path`='$path' WHERE id_user='$idEditingUser'");

    //Если изменяется текущей пользователь сессии
    if($idEditingUser == $_SESSION['user']['id_user']) {
        $_SESSION['user'] = [
            'id_user' => $editingUser['id_user'],
            'login' => $login,
            'FIO' => $FIO,
            'avatar_path' => $path,
            'rights' => $rights
        ];
    }

    $_SESSION['isEdit'] = false;
    //unset($_SESSION['editingUser']);
}

$message = "";
if(!empty($error)) {
    $message = $error;
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
}
//Передача сообщения
$_SESSION['message'] = $message;

header("Location: ../adminMenu.php");
