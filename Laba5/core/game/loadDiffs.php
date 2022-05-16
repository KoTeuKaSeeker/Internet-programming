<?php
include_once('../DB.php');
DB::getInstance();

$tableName = $_POST['tableName'];
$table =  DB::query("SELECT * FROM `$tableName` WHERE `image_id`='$imageId'");