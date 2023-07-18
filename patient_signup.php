<?php

require_once("Database.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";

$SSN = $_POST["SSN"];
$F_Name = $_POST["F_Name"];
$L_Name = $_POST["L_Name"];
$Gender = $_POST["Gender"];
$CountryCode = $_POST['CountryCode'];
$PatientPhone = $_POST["PatientPhone"];
$PatientAddress = $_POST["PatientAddress"];
$DateOfBirth = $_POST["DateOfBirth"];
$HeightinCm = $_POST["HeightinCm"];
$WeightinKg = $_POST["WeightinKg"];
$Allergies = $_POST["Allergies"];
$Email =$_POST["Email"];
$UserPassword = $_POST["UserPassword"];
$UserRole =$_POST["UserRole"];

$sql = "INSERT INTO registerpatients (SSN, F_Name, L_Name, Gender,CountryCode, PatientPhone, PatientAddress, DateOfBirth, HeightinCm, WeightinKg, Allergies,Email, UserPassword,UserRole) 
VALUES ('$SSN', '$F_Name', '$L_Name', '$Gender','$CountryCode', '$PatientPhone', '$PatientAddress', '$DateOfBirth', '$HeightinCm', '$WeightinKg', '$Allergies','$Email', '$UserPassword','$UserRole')";

if ($conn->query($sql) === TRUE) {
  echo "Registration Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
