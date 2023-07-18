<?php
session_start();

if (isset($_SESSION['Email']) && $_SESSION['UserRole'] === 'supervisor') {
    $username = $_SESSION['Email'];
    echo "Welcome back, $Email (supervisor)!";
} else {
    header("Location: login.html");
}
?>