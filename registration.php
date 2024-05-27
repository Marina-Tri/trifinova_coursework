<?php
    $log = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['username']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($log) < 5 || mb_strlen($log) > 90) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($name) < 2 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 12) {
        echo "Недопустимая длина пароля (от 2 до 12 символов)";
        exit();
    }

    $pass = md5($pass."awwdawdasdawe");

    $mysql = new mysqli("localhost","root","root","bd_1");
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`)
    VALUES('$log', '$pass', '$name')");

    $mysql->close();

    header('Location: /');
?>