<?php
include "config.php";
//echo "Update Data";
//echo $_GET['id'];

if(isset($_GET['id'])){
   //echo $id = $_GET['id'];
   $id = $_GET['id'];
   $getStudent = $conn->prepare("SELECT * FROM `student` where id = '$id'");
   $getStudent->execute();
   $student = $getStudent->fetchAll();
   //print_r($student[0]['stname']);

    // echo $stname = $student[0]['stname'];
    // echo $course = $student[0]['course'];
    // echo $fees = $student[0]['fees'];
   $stname = $student[0]['stname'];
   $course = $student[0]['course'];
   $fees = $student[0]['fees'];

}else {
    $id = "";
    $stname = "";
    $course = "";
    $fees = "";
}

?>

<form action="" method="post">
    <input type="text" placeholder="Enter ID" name="id" id="" value="<?php echo $id; ?>">
    <br>
   <input type="text" placeholder="Enter Name"  name="stname" value="<?php echo $stname; ?>">
   <br>
   <input type="text" placeholder="Enter Course" name="course" value="<?php echo $course; ?>">
   <br>
   <input type="text" placeholder="Enter Fees" name="fees" value="<?php echo $fees; ?>">
   <br>
   <button type="submit" name="update" value="<?php echo $id; ?>">Update Student Data</button>
</form> 

<?php
// $updateStudent = $conn->prepare("UPDATE `student` SET `stname` = 'Ravi' WHERE `student`.`id` = '2'");

// echo  $updateStudent->execute();

if(isset($_POST['update'])){
    //echo $id = $_POST['update'];
    $id = $_POST['update'];
    $stname = $_POST['stname'];
    $course = $_POST['course'];
    $fees = $_POST['fees'];
    $updateStudent = $conn->prepare("UPDATE `student` SET `stname` = '$stname', `course` = '$course', `fees` = '$fees' WHERE `student`.`id` = '$id'");
    //echo $updateStudent->execute();
    if($updateStudent->execute()){
        
        header("Location: delete_edit.php");
    }else {
        
        echo "Data Not Updated";
    }
}


?>