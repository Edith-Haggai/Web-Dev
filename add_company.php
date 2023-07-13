<?php

require_once("Database.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";

$company_ID = $_POST["company_ID"];
$company_name = $_POST["company_name"];
$manager = $_POST["manager"];
$CountryCode = $_POST['CountryCode'];
$phoneNo = $_POST["phoneNo"];
$Email =$_POST["Email"];
$Address = $_POST["Address"];
$UserPassword = $_POST["UserPassword"];


$sql = "INSERT INTO companies (company_ID, company_name, manager, CountryCode,phoneNo,Email,Address, UserPassword) 
VALUES ('$company_ID', '$company_name', '$manager', '$CountryCode','$phoneNo', '$Email', '$Address','$UserPassword')";

if ($conn->query($sql) === TRUE) {
  echo "Registration Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
