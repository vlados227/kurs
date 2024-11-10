<?php
include_once("db.php");

// Проверяем, была ли отправлена форма и есть ли нужные данные
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['statement_id'], $_POST['status'])) {
    $statement_id = mysqli_real_escape_string($link, $_POST['statement_id']);
    $new_status = mysqli_real_escape_string($link, $_POST['status']);
    
    // Обновляем статус заявки в базе данных
    $query = "UPDATE statements SET status = '$new_status' WHERE id = '$statement_id'";
    if (mysqli_query($link, $query)) {
        // Перенаправляем обратно к списку заявок
        header("Location: user_statements.php");
        exit;
    } else {
        echo "Ошибка при обновлении статуса: " . mysqli_error($link);
    }
} else {
    echo "Недопустимый запрос.";
}
?>
