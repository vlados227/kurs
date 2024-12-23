<?php
session_start();
if (empty($_SESSION["auth"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация на экскурсию</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script>
        function updatePrice() {
            const tourSelect = document.getElementById("name");
            const priceField = document.getElementById("price");
            const priceDisplay = document.querySelector(".price");
            const qty = document.getElementById("participants");


            let prices = {
                "Истории старой Самары: индивидуальная экскурсия": 3000,
                "Расширенная экскурсия по Самаре на автобусе": 5500,
                "Обзорная пешеходная экскурсия по Самаре": 2000,
                "Теплоходная экскурсия по Волге": 6000,
                "Новогодняя экскурсия по Самаре": 7000,
                "Обзорная экскурсия по историческим местам Самары": 1500,
                "Индивидуальная экскурсия по музеям Самары": 6000,
                "Необычная экскурсия по старым дворам Самары": 2000,
                "Автобусная экскурсия по историческим местам": 6000
            };

            const selectedTour = tourSelect.value;
            const price = prices[selectedTour];
            
            let visitors = qty.value;
            priceField.value = price * qty.value;
            priceDisplay.textContent = `Итого: ${price*qty.value} ₽`;
        }
        
        document.addEventListener("DOMContentLoaded", updatePrice);
    </script>
</head>
<body>
    <?php include 'elements/header.php' ?>
    <?php
    include_once("db.php");
    if(!empty($_POST['name']) && !empty($_POST['datetime']) && !empty($_POST['participants']) && !empty($_POST['price'])) {
        $datetime = $_POST['datetime'];
        $participants = $_POST['participants'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $user_id = $_SESSION['id'];

        $result = mysqli_query($link, "INSERT INTO statements(`user_id`, `name`, `date`, `participants`, `price`) VALUES ('$user_id', '$name', '$datetime', '$participants', '$price')");

        if ($result) {
            header("Location: statement_user.php");
        } else {
            echo "Запрос не выполнен";
        }
    }
    ?>
    <form class="form-container" method="POST" oninput="updatePrice()">
        <h2>Выберите дату и время</h2>
        <input type="datetime-local" name="datetime" id="datetime">

        <div class="participants">
            <label for="name">Выбор Экскурсии</label>
            <select name="name" id="name" onchange="updatePrice()">
                <option value="Истории старой Самары: индивидуальная экскурсия">Истории старой Самары: индивидуальная экскурсия</option>
                <option value="Расширенная экскурсия по Самаре на транспорте туриста">Расширенная экскурсия по Самаре на транспорте туриста</option>
                <option value="Обзорная пешеходная экскурсия по Самаре">Обзорная пешеходная экскурсия по Самаре</option>
                <option value="Теплоходная экскурсия по Волге">Теплоходная экскурсия по Волге</option>
                <option value="Новогодняя экскурсия по Самаре">Новогодняя экскурсия по Самаре</option>
                <option value="Обзорная экскурсия по историческим местам Самары">Обзорная экскурсия по историческим местам Самары</option>
                <option value="Индивидуальная экскурсия по музеям Самары">Индивидуальная экскурсия по музеям Самары</option>
                <option value="Необычная экскурсия по старым дворам Самары">Необычная экскурсия по старым дворам Самары</option>
                <option value="Автобусная экскурсия по историческим местам">Автобусная экскурсия по историческим местам</option>
            </select>

            <label for="participants">Укажите количество участников</label>
            <div>
                <input type="number" id="participants" name="participants" value="1" min="1" max="5">
                <span>Группа от 1 до 5 человек</span>
                <p class="price">Итого: 0 ₽</p>
            </div>
            <input type="hidden" id="price" name="price" value="0">
        </div>

        <div class="submit-button">
            <button type="submit">Начать бронирование</button>
        </div>
    </form>
    <?php include 'elements/footer.php' ?>
</body>
</html>
