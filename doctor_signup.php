<?php

require_once("Database.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";

$SSN = $_POST["SSN"];
$F_Name = $_POST["F_Name"];
$L_Name = $_POST["L_Name"];
$Gender = $_POST["Gender"];
$YOE = $_POST['YOE'];
$Email =$_POST["Email"];
$UserPassword = $_POST["UserPassword"];


$sql = "INSERT INTO doctors (SSN, F_Name, L_Name, Gender,YOE,Email, UserPassword) 
VALUES ('$SSN', '$F_Name', '$L_Name', '$Gender','$YOE', '$Email', '$UserPassword')";

if ($conn->query($sql) === TRUE) {
  echo "Registration Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
