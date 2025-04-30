<?php
include "01_config.php";

class Student{
    public $DBconn;
    function __construct($conn){
        $this->DBconn = $conn;
        
    }

    // function getData(){
    //     $getStudent = $this->DBconn->prepare("SELECT * FROM `studentinfo`");
    //     $getStudent->execute();
    //     $result = $getStudent->fetchAll();
    //     echo "<pre>";
    //     print_r($result);
    //     echo "</pre>";
    // }

    function insertDataWithRequest($request){
        //print_r($request);
        echo "<br>";
        //echo $request['name'];
       // $id = $request['id'];
        $name =$request['name'];
        $class = $request['class'];
        $gender = $request['gender'];
        $address = $request['address'];
        $sqlQuery = "INSERT INTO `studentinfo`( `name`, `class`, `gender`, `address`) VALUES ('$name','$class','$gender','$address')";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if($result){
            echo "Data Inserted";
        }else{
            echo "Data Not Inserted";
        }
        
    }
}

if(isset($_POST['name'])){
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

}

$student = new Student($conn);
//$student->getData();
$student->insertDataWithRequest($_POST);
?>
