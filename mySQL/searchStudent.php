<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>
<body>

<?php
    $mycon = mysqli_connect(
    "localhost",
    "root",
    "",
    "students" 
   );
//    echo "Connection successful<br>";
   echo "<center><h1>Search Student</h1></center>";
   $sql = "SELECT * FROM `studentinfo`";
   $record = mysqli_query($mycon,$sql);
   $count = mysqli_num_rows($record);
   echo "Total number of records: " . $count . "<br>";
   echo "<table border=1>";
        echo "<tr>
           <th>ID</th>
           <th>Name</th>
           <th>Class</th>
           <th>Gender</th>
           <th>Address</th>
        </tr>";
        if ($count>0) {
    

           while($row = mysqli_fetch_array($record))
           {
               echo "<tr>
                     <td>" . $row['id'] . "</td>
                     <td>" . $row['name'] . "</td>
                     <td>" . $row['class'] . "</td>
                     <td>" . $row['gender'] . "</td>
                     <td>" . $row['address'] . "</td>
                </tr>";
            }
        }else {
         echo "<font color='red'>No record found</font>";
        }
    echo "</table>";
    $mycon->close();
?>


</body>
</html>