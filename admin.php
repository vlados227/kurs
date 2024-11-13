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
    <h2>Заявления всех пользователей</h2>
    <div class="results">
        <table style="text-align: center;">
            <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Дата</th>
                <th>Кол-во участников</th>
                <th>Статус</th>
                <th>Цена</th>
                <th>Обновить</th>
            </tr>
            <?php
            include_once("db.php");
            $result = mysqli_query($link, "SELECT * FROM `statements` ORDER BY `date` DESC");
            //$get_username = mysqli_query($link, "SELECT `login` FROM `users` WHERE `id` = '$_SESSION[login]'");

            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['participants']}</td>
                    <td>
                        <select id='status_{$row['id']}'>
                            <option value='новое' " . ($row['status'] == 'новое' ? 'selected' : '') . ">новое</option>
                            <option value='подтверждено' " . ($row['status'] == 'подтверждено' ? 'selected' : '') . ">подтверждено</option>
                            <option value='отклонено' " . ($row['status'] == 'отклонено' ? 'selected' : '') . ">отклонено</option>
                        </select>
                    </td>
                    <td>{$row['price']}</td>
                    <td>
                        <button type='button' onclick='updateStatus({$row['id']})'>Обновить</button>
                    </td>
                </tr>
                ";
            }
            ?>
        </table>
    </div>

    <form id="updateForm" method="post" action="update_status.php" >
        <input type="hidden" name="statement_id" id="statement_id">
        <input type="hidden" name="status" id="status_value">
    </form>
    <script>
    function updateStatus(statementId) {
        let selectedStatus = document.getElementById(`status_${statementId}`).value;
        document.getElementById('statement_id').value = statementId;
        document.getElementById('status_value').value = selectedStatus;
        console.log(document.getElementById('statement_id').value, document.getElementById('status_value').value)

        document.getElementById('updateForm').submit();
        document.getElementById('updateForm').onsubmit = function (event){
            event.preventDefault();
        }
    }
</script>

<? include 'elements/footer.php' ?>
</body>
</html>