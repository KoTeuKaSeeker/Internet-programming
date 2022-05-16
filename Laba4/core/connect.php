<?php

$connect = mysqli_connect('localhost', 'root', '', 'web_about_me');

if(!$connect){
    die('Ошибка подключения к базе данных');
}