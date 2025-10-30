<?php
$host = "localhost";      // XAMPP default
$db   = "event_management"; // Your database name
$user = "root";           // XAMPP default
$pass = "";               // XAMPP default password is empty

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
