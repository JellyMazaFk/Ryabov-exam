<?php
$host = 'db';
$user = 'root';
$pass = 'password';
$db_name = 'vuln_app';

$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
mysqli_query($conn, $sql);
mysqli_close($conn);


$conn = mysqli_connect($host, $user, $pass, $db_name);


$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

mysqli_query($conn, $sql);
?>