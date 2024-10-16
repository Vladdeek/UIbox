<?php
session_start();
require_once 'db.php'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['email']; 
        header('Location: ../index.php');
    } else {
        echo "Неверный email или пароль!";
    }

    $stmt->close();
    $conn->close();
}
?>
