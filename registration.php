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
  <title>Registration</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div id="wrapper">

  <h1>Регистрация</h1>
  <form id="signin"action="vendor/signin.php" method="POST" autocomplete="off">
    <input type="text" id="username" name="login" placeholder="логин" /><br>
        <input type="email" name="email" placeholder="адрес своей почты"><br>
        <input type="password" name="password" placeholder="пароль"><br>
        <input type="password" name="repeat_password" placeholder="подтвердите пароль"><br>
        
    <input type="password" id="repeat_pass" name="r_pass" placeholder="Повторите пароль" />
      <button type="2submit">&#xf101;</button>
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
