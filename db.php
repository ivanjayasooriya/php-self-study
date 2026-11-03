<?php
$host = 'localhost';
$db   = 'crud_app';
$user = 'root';
$pass = 'mysql'; // Default password for XAMPP/WAMP is usually empty

try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    
    // Set error mode to exception so we can catch bugs easily
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, stop and show error
    die("Database connection failed: " . $e.getMessage());
}
?>