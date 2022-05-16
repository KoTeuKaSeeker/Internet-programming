<?php
session_start();
include_once('../DB.php');
DB::getInstance();

$tableName = $_POST['tableName'];

$table = DB::query("SELECT * FROM `$tableName`");
$count = mysqli_num_rows($table);
echo $count;