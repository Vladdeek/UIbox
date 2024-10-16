<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['email']; // This can be email or username
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, email, username, password FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $login, $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header('Location: ../index.php');
        } else {
            echo "Неверный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }

    $stmt->close();
    $conn->close();
}
