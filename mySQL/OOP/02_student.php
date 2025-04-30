<?php
include "01_config.php";
class Student{
    public $DBconn;
    function __construct($conn){
        $this->DBconn = $conn;
        
    }

    function getData(){
        $getStudent = $this->DBconn->prepare("SELECT * FROM `student`");
        $getStudent->execute();
        $result = $getStudent->fetchAll();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }

    function insertData(){
        $sqlQuery = "INSERT INTO `student`(`id`, `stname`, `course`, `fees`) VALUES ('NULL','John','History','5000')";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if($result){
            echo "Data Inserted";
        }else{
            echo "Data Not Inserted";
        }
    }
    function updateData(){
        $sqlQuery = "UPDATE `student` SET `stname`='Elbert',`course`='Civic',`fees`='500' WHERE `id`='3'";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if($result){
            echo "Data Updated";
        }else{
            echo "Data Not Updated";
        }
    }

    // function deleteData(){
    //     $sqlQuery = "DELETE FROM `student` WHERE `id`='6'";
    //     $student = $this->DBconn->prepare($sqlQuery);
    //     $result = $student->execute();
    //     if($result){
    //         echo "Data Deleted";
    //     }else{
    //         echo "Data Not Deleted";
    //     }
    // }

}

$student = new Student($conn);
//$student->getData();
//$student->insertData();
$student->updateData();
//$student->deleteData();
?>