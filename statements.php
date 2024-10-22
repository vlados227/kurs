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
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <style>

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            margin: auto;
        }
             
        .date-selector, .participants, .contact-info, .submit-button {
            margin-bottom: 1.25rem;
        }
        h2 {
            text-align: center;
            margin-bottom: 1.25rem;
        }
        
        [type="datetime-local"] {
            font-family: 'Roboto';
            text-align: center;
            font-size: 1rem;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin: 5px 0;
        }

        .participants input {
            width: 50px;
            text-align: center;
        }
        .participants label {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .participants div{
            margin-top: 20px;
        }

        .price {
            font-size: 1.125rem;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        .checkbox {
            margin: 10px 0;
        }
        .submit-button {
            text-align: center;
        }
        .submit-button button {
            background-color: #0088ff;
            color: white;
            padding: 15px;
            border: none;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }
        </style>
</head>
<body>
    <? include 'elements/header.php' ?>
    <?php
    include_once("db.php");
    if(!empty($_POST["datetime"]) && !empty($_POST["participants"]) && !empty($_POST["name"]) && !empty($_POST["phone"])) {
        $datetime = $_POST["datetime"];
        $participants = $_POST["participants"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];

        $result = mysqli_query($link, "INSERT INTO statements(user_id, dateime)")
    }
    
    ?>
    <form class="form-container">
        <h2>Выберите дату и время</h2>

        <input type="datetime-local" name="datetime" id="datetime">

        <div class="participants">
            <label for="participants">Укажите количество участников</label>
            <div>
                <span>Общий</span>
                <input type="number" id="participants" name="participants" value="1" min="1" max="5">
                <span>Группа от 1 до 5 человек</span>
                <p class="price">Итого: 8 900 ₽</p>
            </div>
        </div>

        <div class="contact-info">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" placeholder="Введите имя">

            <label for="phone">Номер телефона</label>
            <input type="tel" id="phone" name="phone" placeholder="+7">
        </div>

        <div class="submit-button">
            <button>Начать бронирование</button>
        </div>
    </form>
</body>
</html>