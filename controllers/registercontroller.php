<?php

if(empty($_POST))
    exit();
    include "db.php";
$login = $_POST["login"];
$password = md5($_POST["password"]);
$query = "SELECT * FROM `users` WHERE `login` = '$login'";
$result = $link->query($query);
if($result->num_rows > 0) {
    header("Location: ../register.php?error=Пользователь с таким логином уже зарегистрирован");
    // echo "Пользователь с таким логином уже зарегистрован";
    exit();
}

$query = "INSERT INTO `users`(`login`, `password`) VALUES ('$login','$password')";
$link->query($query);
$link->close();
header("location: ../index.php")

?>