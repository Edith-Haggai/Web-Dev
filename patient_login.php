<?php
// Retrieve username, password, and role from the form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['user'];

// Create variables for different database credentials
$doctorDB = array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'doctor_database'
);

$patientDB = array(
    'host' => 'localhost',
    'username' => 'patient_username',
    'password' => 'patient_password',
    'dbname' => 'registerpatients'
);
$pharmacyDB = array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'Pharmacy_database'
);
$AdminDB = array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'Admin_database'
);
$pharmaceutical_companyDB = array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'company_database'
);


// Function to establish database connection
function connection($dbname){
    require_once('Database.php');
}

// Redirect user based on role and connect to the appropriate database
if ($role === 'doctor') {
    $conn = connection($doctorDB);
    // Redirect to doctor page
    header("Location: doctor.php");
} elseif ($role === 'patient') {
    $conn = connection($patientDB);
    // Redirect to patient page
    header("Location: patient.php");
} elseif ($role === 'pharmacy') {
    $conn = connection($pharmacyDB);
    // Redirect to pharmacy page
    header("Location: pharmacies.php");
}elseif ($role === 'Admin') {
    $conn = connection($AdminDB);
    // Redirect to Admin page
    header("Location: Admin.php");
}elseif ($role === 'pharmaceutical company') {
    $conn = connection($pharmaceutical_comapnyDB);
    // Redirect to companies page page
    header("Location: companies.php");
}
else {
    // Invalid role, redirect back to login page
    header("Location: login.html");
    exit();
}

// Perform query to check user credentials in the respective database
$query = "SELECT * FROM project WHERE username='$username' AND password='$password'";

if ($conn->query($sql) === TRUE) {
    echo "Login Successful";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

if ($result->num_rows == 1) {
    // Start session and store user information
    session_start();
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $username['username'];
    $_SESSION['user'] = $user;
} else {
    // Invalid username or password
    header("Location: login.html");
}

$conn->close();
?>
