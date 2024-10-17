<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password !== $password2) {
        echo "Пароли не совпадают!";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Get current timestamp
    $createdAt = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("INSERT INTO users (email, username, password, created_at) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $username, $hashedPassword, $createdAt);

    if ($stmt->execute()) {
        $_SESSION['user'] = $username;
        $_SESSION['user_created_at'] = $createdAt;
        header('Location: ../index.php');
    } else {
        echo "Ошибка регистрации!";
    }

    $stmt->close();
    $conn->close();
}
?>