<?php
class Teacher{

    public $city = "Patna";
    function nextExam(){
        echo "Next Exam is on 12th<br>";
    }

    function age(){
        echo " My Age is 30 <br>";
    }
}

// $teacher1 = new Teacher();
// $teacher1->nextExam(); 
echo "<br>";
class Students extends Teacher{

    public $city = "Ranchi";
    // function nextExam(){
    //     echo "Next Exam is on 15th";
    // }
}

$student1 = new Students();
$student1->nextExam();
echo "<br>";
$student1->age();
echo "<br>";
echo $student1->city;
echo "<br>";
$student2 = new Students();
$student1->age();
?>