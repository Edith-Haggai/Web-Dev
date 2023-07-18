<?php
// Establish database connection
require_once("Database.php");

// Retrieve username, password, and role from the form
$Email = $_POST['Email'];
$UserPassword = $_POST['UserPassword'];
$UserRole = $_POST['UserRole'];

// Perform query to check user credentials including the role
$query = "SELECT * FROM registerpatients WHERE Email='$Email' AND UserPassword='$UserPassword' AND UserRole='$UserRole'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Start session and store user information
    session_start();
    $user = $result->fetch_assoc();
    $_SESSION['Email'] = $user['Email'];
    $_SESSION['F_name'] =$user['F_name'];
    $_SESSION['UserRole'] = $user['UserRole'];

    // Redirect user based on role
    if ($user['UserRole'] == 'doctor') {
        header("Location: doctor.php");
    } elseif ($user['UserRole'] == 'patient') {
        header("Location: patient.php");
    } elseif ($user['UserRole'] == 'Admin') {
        header("Location: admin.php");
    } elseif ($user['UserRole'] == 'supervisor') {
        header("Location: supervisor.php");
    } else {
        echo "Invalid role.";
    }
} else {
    echo "Invalid Email, password, or role.";
}

$conn->close();
?>
