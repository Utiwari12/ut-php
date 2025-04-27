<?php
class Proterties {
    public $name = "Rahul";
    public $age = 22;

    function getName() {
        // echo $this->name;
        // echo "<br>";
        // echo $this->age;

    }

    function updadeName($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo $this->name;
        echo "<br>";
        echo $this->age;
    }
}

$proterties = new Proterties();
$proterties->getName();
echo "<br>";
//echo $proterties->name . "<br>";
//echo $proterties->age . "<br>";

$proterties->updadeName("Mohan", 23);
echo "<br>";
?>