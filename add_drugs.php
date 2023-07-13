<?php

require_once("Database.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";

$drug_ID = $_POST["drug_ID"];
$drug_name = $_POST["drug_name"];
$drug_type = $_POST["drug_type"];
$description = $_POST['description'];
$drug_price = $_POST["drug_price"];



$sql = "INSERT INTO drugs (drug_ID, drug_name,drug_type,description ,drug_price) 
VALUES ('$drug_ID', '$drug_name', '$drug_type', '$description','$drug_price')";

if ($conn->query($sql) === TRUE) {
  echo "Addition Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
