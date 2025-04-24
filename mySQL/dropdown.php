
<?php

include 'config.php';

//$getStudent = $conn->prepare("SELECT * FROM `student`"); // * execute all data
$getStudent = $conn->prepare("SELECT `id`, `stname` FROM `student`");
$getStudent->execute();

$studentData = $getStudent->fetchAll();

//print_r($studentData);

echo "<select>";
echo "<option value=''>Select Student</option>";
foreach($studentData as $data){
    echo "<option value='".$data['id']."'>".$data['stname']."</option>";
}
echo "</select>";


?>