<?php
$mysql = new mysqli('127.0.0.1','root','','registration');
if (isset($_POST[look]))
{
    $res=$mysql->query("SELECT * FROM users");

}

