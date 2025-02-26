<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment and Decrement Operators</title>
</head>
<body>
    /*
     Incrementing/Decrementing Operators 
     <br>
    
     PHP supports pre- and post-increment and decrement operators. Those unary operators allow to increment or decrement the value by one.
     <br>
     Increment/decrement Operators
     <br>
     Example	Name	Effect
     <br>
     ++$a	Pre-increment	Increments $a by one, then returns $a.
     <br>
     $a++	Post-increment	Returns $a, then increments $a by one.
     <br>
     --$a	Pre-decrement	Decrements $a by one, then returns $a.
     <br>
     $a--	Post-decrement	Returns $a, then decrements $a by one.
     <br>
    */
     <br>
    <?php
    $a = 10;
    // ++$a;
    // echo $a."<br>";
    // echo ++$a; // $a = $a + 1 pre-increment
    //  $b = ++$a; // $a = $a + 1  $b = $a
    //  echo "a=".$a."<br>";
    //  echo "b=".$b. "<br>";
    // $b= $a++; // $b = $a $a = $a + 1 
    //   echo "a=".$a."<br>";
    //   echo "b=".$b. "<br>"; 
    //  if (++$a > 10) {
    //     echo "Hello"; //in pre-increment first condition check then increment
    //  } else {
    //     echo "Goodbye"; 
    //  }
    //   echo "<br>";
    //  if ($a++ > 10) {
    //     echo "Hello"; 
    //  } else {
    //     echo "Goodbye"; //in post-increment first condition check then increment
    //  }
    // echo "<br>";
    // echo $a++;  // $a = $a + 1 post-increment
     echo "<br>";
     //  $b = $a++ + $a++;
     //   echo "a=".$a."<br>";
      //a = 10 + 2 = 12
      //echo "b=".$b. "<br>";
      //b= 11+10 = 21
    // echo "<br>";
     //$b = ++$a + $a++;
     //echo "a=".$a."<br>";
      // a = 10+1+1 = 12
      //$b = ++$a + $a++ + ++$a;
      // b = 11 + 11 + 13 = 35 
     //echo "b=".$b. "<br>";
      // b = a + a = 12+10 = 22
     //$b = --$a;
     $b = $a--;
     echo "a=".$a."<br>";
     echo "b=".$b. "<br>";
    // echo "<br>";
    // echo $a--;
    ?>

</body>
</html>