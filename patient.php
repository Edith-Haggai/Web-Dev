<?php
session_start();

if (isset($_SESSION['Email']) && $_SESSION['UserRole'] === 'patient') {
    
    $F_name =$_SESSION['F_name'];
    $Email = $_SESSION['Email'];
    echo "Welcome back, $F_name(patient)!";
} else {
    header("Location: login.html");
}
?>