<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Authorisation</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div id="wrapper">
  <h1>Вход</h1>
  <form id="signin" action="vendor/signin.php" method="post" action="" autocomplete="off">
    <input type="text" id="user" name="user" placeholder="email" ><br>
    <input type="password" id="pass" name="pass" placeholder="пароль" >
    <button type="submit">&#xf0da;</button>
    <p> Нет аккаунта? <a href="/register.php"> Зарегестрируйтесь!</a>
    </p>
    <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
  </form>
</div>
</body>
</html>
