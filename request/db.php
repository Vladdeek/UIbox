<?php
$servername = "sanumxxx.fun";
$username = "a0992402_uibox";
$password = "mPxRQK50";
$dbname = "a0992402_uibox";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
