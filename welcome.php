<?php
if (!isset($_COOKIE['user'])) {
    header('Location: login.php');
    exit();
}

require_once('db.php');

// XSS через куки
$username = $_COOKIE['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This page is only for authorized users.</p>
    <a href="logout.php">Logout</a>
</body>
</html>