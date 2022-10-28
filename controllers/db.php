<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "root";
$dbname = "notes";

//Подключение к базе данных

$link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if($link->connect_errno){
    echo "Ошибка подключения к базе данных:".$link->connect_error;
    exit();
}



?>