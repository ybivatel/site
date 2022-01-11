<?php
setcookie('user', $user['name'], time() - 3600*24*30,"/");
 header('Location: http://localhost:63342/untitled/sign_in.php');
?>
