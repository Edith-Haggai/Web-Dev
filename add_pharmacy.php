<?php

require_once("Database.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";

$Pharmacy_ID = $_POST["Pharmacy_ID"];
$pharmacy_name = $_POST["pharmacy_name"];
$pharmacist = $_POST["pharmacist"];
$CountryCode = $_POST['CountryCode'];
$phoneNo = $_POST["phoneNo"];
$Email =$_POST["Email"];
$Address = $_POST["Address"];
$UserPassword = $_POST["UserPassword"];


$sql = "INSERT INTO pharmacies (Pharmacy_ID, pharmacy_name, pharmacist, CountryCode,phoneNo,Email,Address, UserPassword) 
VALUES ('$Pharmacy_ID', '$pharmancy_name', '$pharmacist', '$CountryCode','$phoneNo', '$Email', '$Address','$UserPassword')";

if ($conn->query($sql) === TRUE) {
  echo "Registration Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
