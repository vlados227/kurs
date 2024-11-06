<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экскурсии по Самаре</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'elements/header.php'; ?>

    <main>
        <section class="intro">
            <h1>Экскурсии по Самаре</h1>
        </section>

        <section class="filters">
            <button onclick="filterTours('price')">Цена до 5000</button>
            <button onclick="filterTours('group')">Для группы</button>
            <button onclick="filterTours('transport')">Тип транспорта</button>
            <button onclick="resetFilters()">Cбросить</button>
        </section>

        <section class="categories">
            <ul>
                <li onclick="filterTours('Популярные')">Популярные</li>
                <li onclick="filterTours('Выездные')">Выездные</li>
                <li onclick="filterTours('Бункер Сталина')">Бункер Сталина</li>
                <li onclick="filterTours('Автобусные')">Автобусные</li>
                <li onclick="filterTours('Обзорные')">Обзорные</li>
                <li onclick="filterTours('Новогодние')">Новогодние</li>
                <li onclick="filterTours('Пешеходные')">Пешеходные</li>
                <li onclick="filterTours('Замок Гарибальди')">Замок Гарибальди</li>
                <li onclick="filterTours('Теплоходные прогулки')">Теплоходные прогулки</li>
                <li onclick="filterTours('Индивидуальные')">Индивидуальные</li>
                <li onclick="filterTours('Необычные')">Необычные</li>
            </ul>
        </section>

            <section class="tours">
        <div class="tour-card" data-category="Пешеходные" data-price="5000" data-group="individual">
            <img src="images/tour1.webp" alt="Истории старой Самары">
            <h2>Истории старой Самары: индивидуальная экскурсия</h2>
            <p>Окунитесь в купеческое прошлое самобытного города Самары...</p>
            <p class="price">5 000 ₽</p>
            <p>2 ч. 30 мин.</p>
        </div>
        <div class="tour-card" data-category="Автобусные" data-price="5500" data-group="group">
            <img src="images/tour2.webp" alt="Расширенная экскурсия">
            <h2>Расширенная экскурсия по Самаре на автобусе</h2>
            <p>Индивидуальная автомобильная и пешеходная экскурсия...</p>
            <p class="price">5 900 ₽</p>
            <p>3 ч.</p>
        </div>
        <div class="tour-card" data-category="Пешеходные" data-price="4500" data-group="group">
            <img src="images/tour3.webp" alt="Обзорная пешеходная экскурсия">
            <h2>Обзорная пешеходная экскурсия по Самаре</h2>
            <p>Отличная возможность увидеть главные достопримечательности...</p>
            <p class="price">4 500 ₽</p>
            <p>2 ч.</p>
        </div>
        <div class="tour-card" data-category="Теплоходные прогулки" data-price="6000" data-group="group">
            <img src="images/tour4.webp" alt="Теплоходная экскурсия">
            <h2>Теплоходная экскурсия по Волге</h2>
            <p>Насладитесь красотой реки Волги с палубы теплохода...</p>
            <p class="price">6 000 ₽</p>
            <p>4 ч.</p>
        </div>
        <div class="tour-card" data-category="Новогодние" data-price="7000" data-group="group">
            <img src="images/tour5.webp" alt="Новогодняя экскурсия">
            <h2>Новогодняя экскурсия по Самаре</h2>
            <p>Погрузитесь в атмосферу праздника и волшебства...</p>
            <p class="price">7 000 ₽</p>
            <p>3 ч.</p>
        </div>
        <div class="tour-card" data-category="Обзорные" data-price="4500" data-group="group">
            <img src="images/tour6.webp" alt="Обзорная экскурсия">
            <h2>Обзорная экскурсия по историческим местам Самары</h2>
            <p>Познакомьтесь с историей города и его знаменитостями...</p>
            <p class="price">4 500 ₽</p>
            <p>2 ч.</p>
        </div>
        <div class="tour-card" data-category="Индивидуальные" data-price="8000" data-group="individual">
            <img src="images/tour7.webp" alt="Индивидуальная экскурсия">
            <h2>Индивидуальная экскурсия по музеям Самары</h2>
            <p>Углубленное знакомство с музейными экспозициями...</p>
            <p class="price">8 000 ₽</p>
            <p>3 ч.</p>
        </div>
        <div class="tour-card" data-category="Необычные" data-price="6000" data-group="individual">
            <img src="images/tour8.webp" alt="Необычная экскурсия">
            <h2>Необычная экскурсия по старым дворам Самары</h2>
            <p>Узнайте тайны старых дворов и закоулков...</p>
            <p class="price">6 000 ₽</p>
            <p>2 ч. 30 мин.</p>
        </div>
        <div class="tour-card" data-category="Замок Гарибальди" data-price="9000" data-group="group">
            <img src="images/tour9.webp" alt="Экскурсия в замок Гарибальди">
            <h2>Путешествие к замку Гарибальди</h2>
            <p>Погрузитесь в средневековую атмосферу уникального замка...</p>
            <p class="price">9 000 ₽</p>
            <p>5 ч.</p>
        </div>
        <div class="tour-card" data-category="Выездные" data-price="7000" data-group="group">
            <img src="images/tour10.webp" alt="Выездная экскурсия">
            <h2>Выездная экскурсия в окрестности Самары</h2>
            <p>Насладитесь природой и историей окрестностей...</p>
            <p class="price">7 000 ₽</p>
            <p>4 ч.</p>
        </div>
        <div class="tour-card" data-category="Популярные" data-price="5000" data-group="group">
            <img src="images/tour11.webp" alt="Популярная экскурсия">
            <h2>Популярная экскурсия по набережной Самары</h2>
            <p>Прогуляйтесь по живописной набережной...</p>
            <p class="price">5 000 ₽</p>
            <p>2 ч.</p>
        </div>
        <div class="tour-card" data-category="Автобусные" data-price="8000" data-group="group">
            <img src="images/tour12.webp" alt="Автобусная экскурсия">
            <h2>Автобусная экскурсия по историческим местам</h2>
            <p>Исследуйте исторические достопримечательности с комфортом...</p>
            <p class="price">8 000 ₽</p>
            <p>3 ч.</p>
        </div>
    </section>

    </main>

    <?php include 'elements/footer.php'; ?>

    <script>
        function filterTours(criteria) {
            const tourCards = document.querySelectorAll('.tour-card');

            tourCards.forEach(card => {
                const category = card.getAttribute('data-category');
                const price = parseInt(card.getAttribute('data-price'), 10);
                const group = card.getAttribute('data-group');

                if (
                    criteria === 'Популярные' && category === 'Популярные' ||
                    criteria === 'Выездные' && category === 'Выездные' ||
                    criteria === 'Пешеходные' && category === 'Пешеходные' ||
                    criteria === 'Автобусные' && category === 'Автобусные' ||
                    criteria === 'Обзорные' && category === 'Обзорные' ||
                    criteria === 'Новогодние' && category === 'Новогодние' ||
                    criteria === 'Замок Гарибальди' && category === 'Замок Гарибальди' ||
                    criteria === 'Теплоходные прогулки' && category === 'Теплоходные прогулки' ||
                    criteria === 'Индивидуальные' && category === 'Индивидуальные' ||
                    criteria === 'Необычные' && category === 'Необычные'
                ) {
                    card.style.display = 'block';
                } else if (criteria === 'price' && price < 5000) {
                    card.style.display = 'block';
                } else if (criteria === 'group' && group === 'individual') {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

            function resetFilters() {
        const tourCards = document.querySelectorAll('.tour-card');
        
        tourCards.forEach(card => {
            card.style.display = 'block';
        });
    }

    </script>
</body>
</html>
