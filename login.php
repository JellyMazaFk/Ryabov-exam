<?php
require_once('db.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // SQL Injection
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        setcookie('user', $username, time() + 3600, '/');
        header('Location: welcome.php');
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>