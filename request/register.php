<?php
session_start();
require_once 'db.php'; // 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


    if ($password !== $password2) {
        echo "Пароли не совпадают!";
        exit;
    }


    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

   
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['user'] = $email; 
        header('Location: ../index.php');
    } else {
        echo "Ошибка регистрации!";
    }

    $stmt->close();
    $conn->close();
}
?>
