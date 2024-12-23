<?php
session_start();
include_once("db.php");
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $result = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)) {
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $user['login'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['role_id'] = $user['role_id'];
        if ($_SESSION['role_id'] == '1') {
            header("Location: index.php");
        }elseif ($_SESSION['role_id'] == '2') {
            header('Location: admin.php');
        }else{
            echo "Неверный логин или пароль";
        }


        #header('Location: index.php');
    } else {
        echo "<p class='error'>Неверный логин или пароль</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <? include 'elements/header.php' ?>

    <main>
        <section class="auth-container">
            <h1>Вход в аккаунт</h1>
            <form action="" method="POST" class="auth-form">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Войти</button>
                <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a></p>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Raketa</p>
    </footer>
</body>

</html>