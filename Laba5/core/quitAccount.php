<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['login']);
unset($_SESSION['password']);
unset($_SESSION['FIO']);
header('Location: ../main.php');