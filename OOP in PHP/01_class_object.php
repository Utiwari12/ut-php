<?php
class MathOperations {
    //Variables and methods
    public $val = 10;
    public $c = 20;
    function add($a, $b) { 
        //echo 20 + 30 . "<br>";
        //echo $a + $b  . "<br>";
        echo $a + $b + $this->val + $this->c . "<br>";
    } 

    function sub($a, $b) {
        echo $a - $b . "<br>";
    }

    function mul($a, $b) {
        echo $a * $b . "<br>";
    }
    function div($a, $b) {
        echo $a / $b . "<br>";
    }

    function floatDiv($a, $b) {
        echo $a / $b . "<br>";
    }

}

$maths = new MathOperations();
$maths->add(20, 40);
echo "<br>";
$maths->add(200, 30);
echo "<br>";
$maths->sub(200, 30);
echo "<br>";
$maths->mul(200, 30);
echo "<br>";
$maths->div(200, 30);
echo "<br>";
$maths->floatDiv(200, 30);
echo "<br>";

//multiple objects
$maths1 = new MathOperations();
$maths1->add(20, 50);
echo "<br>";
$maths2= new MathOperations();
$maths2->add(20, 60);
echo "<br>";
?>