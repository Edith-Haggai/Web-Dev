<html>
<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
    <body>
        <table id="patientstable">
            <th>SSN</th>
            <th>F_Name</th>
            <th>L_Name</th>
            <th>Gender </th>
            <th> CountryCode</th>
            <th>Patientphone </th>
            <th>PatientAddress</th>
            <th>DateOfBirth </th>
            <th>HeightinCm </th>
            <th>WeightinKg </th>
            <th>Allergies </th>
            <th>Email </th>
            <th>UserPassword</th>
            <th>UserRole </th>
            <th>Edit</th>
            <th>Delete</th>

           
       
            <?php
            require_once("Database.php");
             echo"<br>";
            $sql = " SELECT * FROM RegisterPatients";
            $result = $conn->query($sql);

            if($result-> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                    echo "<tr>
                    <td> $row[SSN]</td>  
                    <td> $row[F_name] </td>
                    <td> $row[L_name]</td>
                    <td> $row[Gender]</td>
                    <td> $row[CountryCode]</td> 
                    <td> $row[PatientPhone]</td>
                    <td> $row[PatientAddress]</td>
                    <td> $row[DateOfBirth]</td>
                    <td> $row[HeightinCm]</td>
                    <td> $row[WeightinKg]</td>
                    <td> $row[Allergies]</td>
                    <td> $row[Email]</td>
                    <td> $row[UserPassword]</td>
                    <td> $row[UserRole]</td>
                    <td><a href = '/drugDispenser/edit1.php?SSN=$row[SSN]'> Edit </a> </td>
                    <td><a href ='/phptest/drug-dispensing-tool/ProjectForms/deletepatients.php?SSN=$row[SSN]'>Delete</a></td>
                     </tr>";
                    }
             }
            else{
             echo "No results";
            }
             $conn->close();
             ?>
        </table>
        <script type='text/javascript' src="pagination.js" ></script>
    </body>    
</html>