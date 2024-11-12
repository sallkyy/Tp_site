<?php

require_once('db.php');
// выносим данные из поста в отельные переменный
$login = $_POST['login'];
$password = $_POST['password'];

$sql="INSERT INTO users (login,password) VALUES ('$login','$password')" ;

$conn -> query($sql);