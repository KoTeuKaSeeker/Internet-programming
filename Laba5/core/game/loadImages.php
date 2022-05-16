<?php
session_start();
include_once('../DB.php');
DB::getInstance();

$tableName = $_POST['tableName'];
$message = "";

$table = DB::query("SELECT * FROM `$tableName`");
$x = 0;
while($item = DB::fetch_array($table)) {
    if($x > 0)
        $message .= ", ";

    $message .= $item['path_image1'] . " ";
    $message .= $item['path_image2'];
    $x++;
}

echo $message;