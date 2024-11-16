<?php

require_once('db.php');
// выносим данные из поста в отельные переменный
$fio = $_POST['fio'];
$position = $_POST['position'];
$login = $_POST['login'];
$password = $_POST['password'];

if(empty($login)|| empty($password)||empty($fio)||empty($position)){
    echo "Заполните все поля";
} 
$sql="INSERT INTO UsersAdmin (fio, position, login,password) VALUES ('$fio','position','$login','$password')" ;

if($conn -> query($sql) ===TRUE){
    echo "Успешная регистрация";
}else{
    echo "Ошибка: " . $conn->erorr;
}