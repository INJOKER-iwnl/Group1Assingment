<?php
$host = 'localhost';
$dbname = 'student_course_hub';
$username = 'root'; // Default XAMPP username
$password = '';     // Default XAMPP password is empty
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>