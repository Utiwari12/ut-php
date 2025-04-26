<?php
include 'config.php';
//$students = $conn->prepare("DELETE  FROM `student` where id = '1'");
//echo $students->execute();
$students = $conn->prepare("SELECT * FROM `student`");
$students->execute();
$result = $students->fetchAll();
//print_r($result);

echo "<table border = '1'>";
     foreach ($result as $student) {
      echo "<tr> 
             <td>".$student['id']. "</td>
             <td>".$student['stname']. "</td>
             <td>".$student['course']. "</td>
             <td>".$student['fees']. "</td>

             <td>
              <form method='post'>
              <button name='delete' value='".$student['id']."'>Delete</button>

              </form>
             </td>

             <td>
              <a href='update.php?id=".$student['id']."'>Edit</a>
             </td>


      </tr>";
     
    
     }
echo "</table>";

if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $students = $conn->prepare("DELETE FROM `student` where id = '$id'");
  if ($students->execute()) {
    echo "Record Deleted Successfully";
    header("Refresh:0");  // here 0 means refresh current page in 0 seconds
    exit();
  }else {
    echo "Not Deleted";
  }
}
?>