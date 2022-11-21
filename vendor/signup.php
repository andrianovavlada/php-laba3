<?php

    session_start();
    require_once 'connect.php';

  if (isset($_POST['login'])and isset($_POST['password'])) {
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if ($password === $repeat_password) {
      
        mysqli_query($connect, "INSERT INTO `users` (`login`, `password`,`full_name`,  `email`) 
        VALUES ('$login', '$password','$full_name',  '$email')");
      echo 'Регистрация прошла успешно!.'<br>';

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registration.php');
    }
}
?>
