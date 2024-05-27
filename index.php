<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книжный магазин</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Добро пожаловать в книжный магазин</h1>
    </header>
    <main>
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <section>
            <h2>Регистрация</h2>
            <br>
            <form action="registration.php" method="post">
                <label for="login">Логин:</label>
                <input type="text" id="login" name="login">
                <label for="username">Имя:</label>
                <input type="text" id="username" name="username">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password">
                <br><br>
                <center>
                    <button type="submit" value="Зарегистрироваться">Зарегистрироваться</button>
                </center>
            </form>
        </section>
        <section>
            <h2>Авторизация</h2>
            <br>
            <form action="login.php" method="post">
                <label for="loginUsername">Логин:</label>
                <input type="text" id="loginUsername" name="loginUsername">
                <label for="loginPassword">Пароль:</label>
                <input type="password" id="loginPassword" name="loginPassword">
                <button type="submit" value="Войти">Войти</button>
            </form>
        </section>
        <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
        <?php endif; ?>
    </main>
    <br>
    <footer>
        <p>&copy; 2024 Книжный магазин</p>
    </footer>
</body>
</html>