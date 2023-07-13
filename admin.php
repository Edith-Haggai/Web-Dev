<?php
session_start();

if (isset($_SESSION['Email']) && $_SESSION['UserRole'] === 'Admin') {
    $username = $_SESSION['Email'];
    echo "Welcome back, $Email (Admin)!";
} else {
    header("Location: login.html");
}
?>