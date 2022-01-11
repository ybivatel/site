<?php
$name =filter_var(trim($_POST ['name']),
FILTER_SANITIZE_STRING);
$password =filter_var(trim($_POST ['password']),
    FILTER_SANITIZE_STRING);

 $mysql = new mysqli('127.0.0.1','root','','registration');
 $mysql->query("INSERT INTO `users` (`name`, `password`)
 VALUES('$name', '$password')");

 $mysql->close();
 header('Location: http://localhost:63342/untitled/mane.html');
?>