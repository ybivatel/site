<?php
$name =filter_var(trim($_POST ['name']),
    FILTER_SANITIZE_STRING);
$password =filter_var(trim($_POST ['password']),
    FILTER_SANITIZE_STRING);
$mysql = new mysqli('127.0.0.1','root','','registration');
$result= $mysql->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
$user=$result->fetch_assoc();
if (count($user) == 0) {
    echo "такой пользователь не найден";
    exit();
}
 setcookie('user', $user['name'], time() + 3600*24*30,"/");
$mysql->close();
header('Location: http://localhost:63343/untitled/mane.html');
?>