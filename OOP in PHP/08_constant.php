<?php

class Constant{
    const PI = 3.14;
    const E = 2.71;
    // const collegeName = "Luminar Technolab";
    protected const collegeName = "Luminar Technolab";
    function getCollegeName(){
        echo self::collegeName;
        //echo Constant::collegeName;
    }
}

class Child extends Constant{
    function getChildName(){
        echo self::collegeName;
    }
}

// echo Constant::PI;
// echo "<br>";
// echo Constant::E;
// echo "<br>";
//echo Constant::collegeName;
echo "<br>";

// $constant = new Constant();
// $constant->getCollegeName();
// echo "<br>";

$child = new Child();
$child->getChildName();




?>