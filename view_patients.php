<?php
require_once("Database.php");
$sql="SELECT* FROM registerpatients ";
$result=$conn ->query($sql);
$row=$result ->fetch_assoc();
echo"<pre>";
print_r($row);
//echo $row["F_Name"];
echo"</pre>"
?>