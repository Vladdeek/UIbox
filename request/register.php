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

    $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['user'] = $username; // Store username instead of email
        header('Location: ../index.php');
    } else {
        echo "Ошибка регистрации!";
    }

    $stmt->close();
    $conn->close();
}
