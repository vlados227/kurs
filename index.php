<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экскурсии по Самаре</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php
    session_start();
    if(!empty($_SESSION['auth'])){
    }
    ?>
</head>
<body>
    <? include 'elements/header.php' ?>

    <main>
        <section class="intro">
            <h1>Экскурсии по Самаре</h1>
            <!-- <p>19 экскурсий, цены на прогулки от 350 ₽. Смотрите расписание на октябрь-ноябрь 2024 года, выбирайте маршрут по Самаре и бронируйте билеты онлайн на Sputnik8.</p> -->
        </section>

        <section class="filters">
            <button>Дата</button>
            <button>Цена</button>
            <button>Тип группы</button>
            <button>Тип транспорта</button>
        </section>

        <section class="categories">
            <ul>
                <li>Популярные</li>
                <li>Выездные</li>
                <li>Бункер Сталина</li>
                <li>Автобусные</li>
                <li>Обзорные</li>
                <li>Новогодние</li>
                <li>Пешеходные</li>
                <li>Замок Гарибальди</li>
                <li>Теплоходные прогулки</li>
                <li>Индивидуальные</li>
                <li>Необычные</li>
            </ul>
        </section>

        <section class="tours">
            <div class="tour-card">
                <img src="images/quot;.webp" alt="Истории старой Самары">
                <h2>Истории старой Самары: индивидуальная экскурсия</h2>
                <p>Окунитесь в купеческое прошлое самобытного города Самары...</p>
                <p class="price">5 000 ₽</p>
                <p>2 ч. 30 мин.</p>
            </div>
            <div class="tour-card">
                <img src="images/quot;.webp" alt="Расширенная экскурсия">
                <h2>Расширенная экскурсия по Самаре на транспорте туриста</h2>
                <p>Индивидуальная автомобильная и пешеходная экскурсия...</p>
                <p class="price">5 500 ₽</p>
                <p>3 ч.</p>
            </div>
            <div class="tour-card">
                <img src="images/quot;.webp" alt="Обзорная пешеходная экскурсия">
                <h2>Обзорная пешеходная экскурсия по Самаре</h2>
                <p>Отличная возможность увидеть главные достопримечательности...</p>
                <p class="price">4 500 ₽</p>
                <p>2 ч.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Raketa</p>
    </footer>
</body>
</html>
