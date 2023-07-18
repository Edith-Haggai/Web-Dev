<?php
require_once("Database.php");
 $SSN="";
 $F_name="";
 $DOB="";
 $Gender="";
 $UserPassword="";

 if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET["SSN"])){
        header("Location: tables.php ");
    }

    $SSN=$_GET["SSN"];

    $sql="SELECT * FROM registerpatients WHERE SSN=$SSN";
    $result = mysqli_query($conn, $sql);
    $row=$result->fetch_assoc();

    if(!$row ){
         header("Location: tables.php");
         exit;
    }

    $SSN=$row["SSN"];
 $F_name=$row["F_Name"];
 $DOB=$row["DOB"];
 $Gender=$row["Gender"];
 $Userpassword=$row["UserPassword"];


 }else{

    $SSN=$_POST["SSN"];
    $F_name=$_POST["F_name"];
    $DOB=$_POST["DOB"];
    $Gender=$_POST["Gender"];
    $Userpassword=$_POST["UserPassword"];

    do{
        if(empty($SSN) || empty($F_name) || empty($DOB)){
            echo "All fields are required ";
            break;

        }

        $sql="UPDATE registerpatients SET SSN='$SSN',F_Name='$F_name',DOB='$DOB',`Gender`='$Gender',`Userpassword`='$UserPassword' WHERE SSN=$SSN";

        $result = mysqli_query($conn, $sql);
    }while(true);


 }
?>