<?php
session_start();
include_once("db.php");
if (empty($_POST['login']) && empty($_POST['password']) && empty($_POST['phone'])) {
    echo "заполните все поля";
} else {
    $login = trim($_POST['login']);
    $password = trim(md5($_POST['password']));
    $phone = trim($_POST['phone']);

    $check_availability = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login'");
    $user = mysqli_fetch_assoc($check_availability);
    if (empty($user)){
        $result = mysqli_query($link, "INSERT INTO `users` SET `login` = '$login', `password` = '$password', `phone` = '$phone'");
        $_SESSION['auth'] = true;
    }else{
        echo '<h3 class="error">ошибка: логин уже занят</h3>';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
            <h1>Регистрация</h1>
            <form action="" method="POST" class="auth-form">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона</label>
                    <input pattern="^(8|\+7)(\(\d{3}\)|\d{3})-?\d{7}-?\d" type="number" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Зарегистрироваться</button>
                <p>Уже есть аккаунт? <a href="login.php">Войдите</a></p>
            </form>
        </section>
    </main>
    <? include 'elements/footer.php' ?>
</body>

</html>