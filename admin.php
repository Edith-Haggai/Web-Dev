<?php
session_start();

if (isset($_SESSION['Email']) && $_SESSION['UserRole'] === 'Admin') {
    $F_name =$_SESSION['F_name'];
    $username = $_SESSION['Email'];
   // echo "Welcome back, $F_name (Admin)!";
} else {
    header("Location: login.html");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1 style="text-align: right;">Hello,  <?php echo $_SESSION['F_name']; ?></h1>
     <p><a href="../drugDispenser/drugsTables.php">drugs stock</a></p>
     <p><a href="../drugDispenser/companyTable.php">View companies</a></p>
     <p><a href="../drugDispenser/patientTables.php">View patients</a></p>
     <p><a href="../drugDispenser/pharmacyTables.php">View pharmacies</a></p>
     <p><a href="../drugDispenser/prescriptionTables.php">View prescriptions</a></p>
     <p><a href="../drugDispenser/doctorTables.php">View Doctors</a></p>
     <p style="text-align: left;"><a href="../signout.php">Sign Out</a></p>
     <p><a href="/drugDispenser/patientTables.php"></a></p>
   
</body>
</html>