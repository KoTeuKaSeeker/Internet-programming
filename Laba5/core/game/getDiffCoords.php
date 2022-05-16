<?php
session_start();
include_once('../DB.php');
DB::getInstance();

$imageId = $_POST['imageId'];
$tableName = $_POST['tableName'];

$table = DB::query("SELECT * FROM `$tableName` WHERE `image_id`='$imageId'");

$coords = "";
$x = 0;
while($item = DB::fetch_array($table)){
    if($x > 0)
        $coords .= ", ";

    $coords .= $item['diff_x_1'] . " ";
    $coords .= $item['diff_y_1'] . " ";

    $coords .= $item['diff_x_2'] . " ";
    $coords .= $item['diff_y_2'];

    $x++;
}

echo $coords;
