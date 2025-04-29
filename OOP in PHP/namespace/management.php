<!-- Import both classse teacher and student -->
<?php
include "teacher.php";
include "student.php";

$teacher = new teacher\JoiningDetails();
$teacher->getJoiningDate();
echo "<br>";
$student = new student\JoiningDetails();
$student->AdmissionDate();
?>