<?php
require_once('db.php');

// Проверяем авторизацию
if (isset($_COOKIE['user'])) {
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php');
    exit();
}
?>