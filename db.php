<?php
$link = mysqli_connect('localhost','root','', 'service');
if (!$link) {
    die('Ошибка'.mysqli_connect_error());
}
?>