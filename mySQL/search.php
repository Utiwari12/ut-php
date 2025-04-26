
<form action="" method="post">
    <input type="text" name="search" placeholder="Enter Name for Search">
    <button>Search</button>
</form>

<?php
include "config.php";
//echo "Search Data";

if(isset($_POST['search'])){
    //echo $search = $_POST['search'];
    $search = $_POST['search'];
    //$student = $conn->prepare("SELECT * FROM `student` where stname = '$search'");
    $student = $conn->prepare("SELECT * FROM `student` where stname like '%$search%'");
    $student->execute();
    $result = $student->fetchAll();
    //print_r($result);

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
}
?>