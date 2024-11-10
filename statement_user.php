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
    <? include 'elements/header.php'; ?>

    <main>
    <h2>Заявления пользователя</h2>
    <div class="results">
        <?php
        include_once("db.php");
        $result = mysqli_query($link, "SELECT * FROM statements WHERE user_id = '$_SESSION[id]'");

        // Отображаем каждую заявку с формой для обновления статуса
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <form method='post' action='update_status.php'>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[date]</td>
                    <td>Кол-во участников: $row[participants]</td>
                    <td>Статус: 
                        <select name='status'>
                            <option value='новое' " . ($row['status'] == 'новое' ? 'selected' : '') . ">новое</option>
                            <option value='подтверждено' " . ($row['status'] == 'подтверждено' ? 'selected' : '') . ">подтверждено</option>
                            <option value='отклонено' " . ($row['status'] == 'отклонено' ? 'selected' : '') . ">отклонено</option>
                        </select>
                    </td>
                    <td>Цена: $row[price]</td>
                    <td>
                        <input type='hidden' name='statement_id' value='$row[id]'>
                        <button type='submit'>Обновить статус</button>
                    </td>
                </tr><br>
            </form>
            ";
        }
        ?>
    </div>
</main>

    <? include 'elements/footer.php' ?>
</body>