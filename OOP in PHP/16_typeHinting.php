<?php

function fruit(string $name, $color) {
    //echo "The $color $name is juicy";
    echo "The {$color} {$name} is juicy";
    
}

fruit("apple", "red");

function students(array $student, array $class) {
    for($i= 0; $i < count($student); $i++) {
        echo "{$student[$i]} is in {$class[$i]} class <br>";
    }
    
}

$student = ["Mohan", "Sohan", "Rohan", "Rohan", "Mohan"];
$class = ["10th", "9th", "8th", "7th", "5th"];
students($student, $class);

class College{
    function getName(array|string $name){
        echo $name;
        echo "<br>";
        echo gettype($name);
    }
}

$student = new College();
$student->getName("Mohan");
?>