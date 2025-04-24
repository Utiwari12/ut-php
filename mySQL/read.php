
<?php
include 'config.php';
$getStudensts = $conn->prepare("SELECT * FROM `student`");
$getStudensts->execute();
$result = $getStudensts->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result); // this result in array format

//for table format
echo "<table border = '1'>";
    foreach ($result as $student) {
     echo "<tr> 
          <td>".$student['id']. "</td>
          <td>".$student['stname']. "</td>
          <td>".$student['course']. "</td>
          <td>".$student['fees']. "</td>
     </tr>";
    
   
    }

echo "</table>";

?>