<?php
    $log = filter_var(trim($_POST['loginUsername']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['loginPassword']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."awwdawdasdawe");

    $mysql = new mysqli("localhost","root","root","bd_1");

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$log' AND `password` = '$pass'");
    $user = $result->fetch_assoc();
    if(empty($user)) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();
    
    header('Location: /');
?>