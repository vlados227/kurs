<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <style>
            [type="submit"]{
                margin-left: 10px;
                padding: 10px;
                font-size: 1rem;
                font-family: 'Roboto';
                border: 1px solid #ccc;
                background-color: #007bff;
                color: #fff;
                border-radius: 4px;
            }
        </style>
    <title>Admin</title>
    
</head>
<body>
    
    <? include 'elements/header.php' ?>
    <h2>Заявки всех пользователей</h2>
    <div class="results">
        <?php 
        include_once("db.php");
        $result = mysqli_query($link, "SELECT * FROM `statements` LEFT JOIN `users` ON statements.user_id = users.id ORDER BY date DESC");
        $get_username = mysqli_query($link, "SELECT `login` FROM `users` WHERE `id` = '$_SESSION[login]'");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <form method='post' action='update_status.php'>
            <div class='statement'>
                <tr>
                    <td>$row[name]</td><br>
                    <td>$row[date]</td><br>
                    <td>Кол-во участников: $row[participants]</td><br>
                    <td>Статус: 
                        <select name='status'>
                            <option value='новое' " . ($row['status'] == 'новое' ? 'selected' : '') . ">новое</option>
                            <option value='подтверждено' " . ($row['status'] == 'подтверждено' ? 'selected' : '') . ">подтверждено</option>
                            <option value='отклонено' " . ($row['status'] == 'отклонено' ? 'selected' : '') . ">отклонено</option>
                        </select>
                        <button type='submit'>Обновить статус</button><br>
                    </td>
                    <td><strong>Цена: $row[price]</strong
                   ></td>
                    <td>
                        <input type='hidden' name='statement_id' value='$row[id]'>
                    </td>
                </tr><br>
            </form>
            </div>
            ";
        }
        ?>
    </div>
<? include 'elements/footer.php' ?>
</body>
</html>