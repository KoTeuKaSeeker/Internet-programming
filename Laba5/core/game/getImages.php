<?php
session_start();
include_once('../DB.php');
DB::getInstance();

$imageId = $_POST['imageId'];
$tableName = $_POST['tableName'];

$table = DB::query("SELECT * FROM `$tableName` WHERE `image_id`='$imageId'");
$item = DB::fetch_array($table);

echo $item['path_image1'] . " " . $item['path_image2'];