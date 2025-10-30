<?php
session_start();
require 'db_connect.php'; // Make sure path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic validation
    if ($password !== $confirm_password) {
        $_SESSION['signup_error'] = "Passwords do not match!";
        header('Location: ../signup.html');
        exit();
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['signup_error'] = "Email already registered!";
        header('Location: ../signup.html');
        exit();
    }
    $stmt->close();

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['user_name'] = $full_name;
        $_SESSION['user_email'] = $email;
        header('Location: ../index.php'); // Redirect to homepage
        exit();
    } else {
        $_SESSION['signup_error'] = "Something went wrong. Please try again!";
        header('Location: ../signup.html');
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    header('Location: ../signup.html');
    exit();
}
?>
