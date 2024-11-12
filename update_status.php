<?php
include_once("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['statement_id'], $_POST['status'])) {
    $statement_id = mysqli_real_escape_string($link, $_POST['statement_id']);
    $new_status = mysqli_real_escape_string($link, $_POST['status']);
    
    $query = "UPDATE statements SET status = '$new_status' WHERE id = '$statement_id'";
    if (mysqli_query($link, $query)) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Ошибка при обновлении статуса: " . mysqli_error($link);
    }
} else {
    echo "Недопустимый запрос.";
}
?>
