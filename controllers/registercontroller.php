<?php

if(empty($_POST))
    exit();
    include "db.php";
$login = $_POST["login"];
$password = $_POST["password"];
$query = "SELECT * FROM `users` WHERE `login` = '$login'";
$result = $link->query($query);
if($result->num_rows > 0) {
    echo "Пользователь с таким логином уже зарегистрован";
}

$query = "INSERT INTO `users`(`login`, `password`) VALUES ('$login','$password')";
$link->query($query);

?>