<?php



if(isset($_GET["SSN"])){

    $SSN=$_GET["SSN"];

    require_once("Database.php");


//$SSN = trim(mysqli_real_escape_string($conn, $_GET['SSN']));
//$delete_user = mysqli_query($conn, "DELETE FROM doctors WHERE SSN='$SSN'");
$sql="DELETE FROM registerpatients WHERE SSN='$SSN'";

$result = mysqli_query($conn, $sql);
if ($stmt->affected_rows > 0) {
    echo "User deleted successfully.";
} else {
    echo "No user found with the provided SSN.";
}



}

header('Location: view_patients.php');
exit;
?>