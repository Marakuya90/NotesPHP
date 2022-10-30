<?php
session_start();
if(empty($_POST))
    exit();
    include "db.php";
$login = $_POST["login"];
$password = md5($_POST["password"]);
$query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$result = $link->query($query);
if($result->num_rows == 0) {
    header("Location: ../index.php?error=Пользователь с такими данными не найден");
    exit();
}
$row = $result->fetch_assoc();
$_SESSION["userId"] = $row["id"];
$link->close();
header("Location: ../notes.php");
?>