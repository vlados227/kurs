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
            echo "<div class='statement'>
            <p><b>пользователь: $row[user_id]</b></p>
            <p><b>Название экскурсии: </b>$row[name]</p>
            <p><b>Дата проведения: </b>$row[date]</p>
            <p><b>Количество участников: </b>$row[participants]</p>
            <p><b>Статус заявки: </b>$row[status]</p>
            </div>";
        }
        ?>
    </div>
<? include 'elements/footer.php' ?>
</body>
</html>