<?php
session_start();
include_once('connect.php');
$connect = $GLOBALS['connect'];
$id_user = $_GET['id'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id_user`='$id_user'");
$editingUser = mysqli_fetch_assoc($check_user);
$_SESSION['editingUser'] = [
    'id_user' => $editingUser['id_user'],
    'login' => $editingUser['login'],
    'FIO' => $editingUser['FIO'],
    'rights' => $editingUser['right'],
    'avatar_path' => $editingUser['avatar_path'],
];

$_SESSION['login'] = $editingUser['login'];
$_SESSION['password'] = "";
$_SESSION['FIO'] = $editingUser['FIO'];
$_SESSION['message'] = "";

$_SESSION['isEdit'] = true;
header("Location: ../adminMenu.php");