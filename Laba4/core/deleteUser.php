<?
session_start();
include_once('DB.php');
DB::getInstance();

$user_id = $_GET['id'];
DB::query("DELETE FROM `users` WHERE `id_user`='$user_id'");

if($user_id == $_SESSION['user']['id_user']){
    unset($_SESSION['user']);
    header("Location: ../main.php");
} else {
    header("Location: ../adminMenu.php");
}