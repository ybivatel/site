<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html">
    <title>Title</title>
  <link rel="stylesheet" href="css/signin.css" type="text/css">
  <link rel="stylesheet"
        href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
</head>
<body>

<div id="range2">
    <?php
    if ($_COOKIE['user'] == ''):
    ?>
  <div class="outer">
    <div class="middle">
      <div class="inner">

        <div class="login-wr">
          <h2>Вход</h2>

          <form action="sign/signin.php" method="post" class="form">
            <input type="text" placeholder="Пользователь" id="name" name="name">
            <input type="password" placeholder="Пароль" id="password"  name="password">
            <a href="autent.php"> <p> авторизация </p></a>
            <button type="submit">регистрация </button>
          </form>
        </div>
          <?php endif;?>
      </div>
    </div>
  </div>

</div>

</body>
</html>