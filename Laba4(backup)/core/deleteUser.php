<?
session_start();
include_once('connect.php');
$connect = $GLOBALS['connect'];

$user_id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `users` WHERE `id_user`='$user_id'");

if($user_id == $_SESSION['user']['id_user']){
    unset($_SESSION['user']);
    header("Location: ../main.php");
} else {
    header("Location: ../adminMenu.php");
}