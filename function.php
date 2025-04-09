<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in PHP</title>
</head>
<body>
    <?php
    // function display(){
    //     echo "Hello World <br>";

    // }
    // display(); // calling of function
    // display();
    // echo "end of program";
    echo "<br>";
    // function add($a, $b)  // parameter
    // {
        
    //     echo "Sum of $a and $b is " . $a + $b;
    // }
    // add(10, 20); //argument
    // echo "<br>";
    // add(30, 40);
    // echo "<br>";
    // add(50, 60);

    // function add(...$a)  // parameter of variable argument (var arg)
    // {
    //     $add = 0;
    //    foreach ($a as $value) {
    //     $add = $add + $value;
        
    //    }
    //    echo "Sum of : $add  <br>";
    // }
    // add(10, 20); //argument
    // echo "<br>";
    // add(30, 40, 60);
    // echo "<br>";
    // add(50, 60, 70, 80);

    // function factorial($n) {
    //     $fact = 1;
    //     for ($i = 1; $i <= $n; $i++) {
    //         $fact = $fact * $i;
    //     }
    //     echo "Factorial of $n is: $fact <br>";
    // }
    // factorial(5);
    // factorial(10);

    // factorial using while loop
    // function Factorial($n) {
    //     $fact = 1;
    //     $i = 1;
    //     while ($i <= $n) {
    //         $fact = $fact * $i;
    //         $i++;
    //     }
    //     echo "Factorial of $n is: $fact <br>";
    // }
    // Factorial(6);
    // Factorial(9);

    // function factorial($n){
    //     $f = 1;
    //     while ($n!= 0) {
    //         $f = $f*$n;
    //         $n--;
           
   
    //     }
    //     return $f; //return by value
       
    // }
    // $fact = factorial(5);
    // echo "Factorial   is: " .$fact ;

    // copy by value and copy by reference

    // function display($a, $b) {
    //     $a = $a + 10;
    //     $b = $b + 20;

    // }

    // $a = 60;
    // $b = 70;
    // display($a, $b);
    // echo $a . "<br>" .$b;
    // echo "<br>";
    // function show(&$a, &$b)  // call by reference or copy by reference
    // {
    //     $a = $a + 10;
    //     $b = $b + 20;

    // }

    // $a = 80;
    // $b = 90;
    // show($a, $b);
    // echo $a . "<br>" .$b;

    echo "<br>";

    function swap(&$a, &$b)
    {
        $c = $a;
        $a = $b;
        $b = $c;

    }

    $a = 80;
    $b = 90;

    echo "Before swaping: " .$a . " ".$b;
    swap($a, $b);
    echo "<br>";
    echo "After swaping: " .$a . " ".$b;
    swap($a, $b);


    ?>
</body>
</html>