<?php
require_once('db.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // SQL Injection
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>