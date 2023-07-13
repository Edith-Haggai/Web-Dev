<?php

require_once("Database.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";

$Contract_ID = $_POST["Contract_ID"];
$start_date = $_POST["start_date"];
$exp_date = $_POST["exp_date"];
$Contract_txt = $_POST["Contract_txt"];
$supervisor = $_POST['supervisor'];



$sql = "INSERT INTO contracts (Contract_ID,start_date, exp_date, Contract_txt,supervisor) 
VALUES ('$Contract_ID', '$start_date', '$exp_date', '$Contract_txt','$supervisor')";

if ($conn->query($sql) === TRUE) {
  echo "Registration Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
