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
    <script>
        function updatePrice() {
            const tourSelect = document.getElementById("name");
            const priceField = document.getElementById("price");
            const priceDisplay = document.querySelector(".price");

            let prices = {
                "Истории старой Самары: индивидуальная экскурсия": 3000,
                "Расширенная экскурсия по Самаре на транспорте туриста": 5000,
                "Обзорная пешеходная экскурсия по Самаре": 2000
            };

            const selectedTour = tourSelect.value;
            const price = prices[selectedTour];

            priceField.value = price;
            priceDisplay.textContent = `Итого: ${price} ₽`;
        }

        document.addEventListener("DOMContentLoaded", updateфPrice);
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
