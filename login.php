<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <? include 'elements/header.php' ?>

    <main>
        <section class="auth-container">
            <h1>Вход в аккаунт</h1>
            <form action="/login" method="POST" class="auth-form">
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Войти</button>
                <p>Нет аккаунта? <a href="register.html">Зарегистрируйтесь</a></p>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Sputnik8</p>
    </footer>
</body>
</html>
