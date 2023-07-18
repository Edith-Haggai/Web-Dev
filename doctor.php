<?php

session_start();

if (isset($_SESSION['Email']) && $_SESSION['UserRole'] === 'doctor') {
    $username = $_SESSION['Email'];
    echo "Welcome back, $Email (Doctor)!";
} else {
    header("Location: login.html");
}
?>
