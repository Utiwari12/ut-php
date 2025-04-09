<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>

<!-- Operator	Name	Example	Result	
+	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power -->

    <?php
    $a = 30;
    $b = 20;
    $c = $a + $b;
    echo $c;
    echo "<br>";
    // $c = $a - $b;
    // echo $c;
    // echo "<br>";
    // $c = $a * $b;
    // echo $c;
    // echo "<br>";
    // $c = $a / $b;
    // echo $c;
    // echo "<br>";
    // $c = $a % $b;
    // echo $c;
    // var_dump($c);
    // echo "<br>";
    // $c = $a ** $b;
    // echo $c;
    // echo "<br>";
    // var_dump($c);
    //  echo 'Post-increment:', PHP_EOL;
    //  echo "<br>";
    //  $a = 5;
    //  var_dump($a++);
    //  echo "<br>";
    //  var_dump($a);
    //  echo "<br>";
    //  echo 'Pre-increment:', PHP_EOL;
    //  echo "<br>";
    //  $a = 5;
    //  var_dump(++$a);
    //  echo "<br>";
    //  var_dump($a);
    //  echo "<br>";
    //  echo 'Post-decrement:', PHP_EOL;
    //  echo "<br>";
    //  $a = 5;
    //  var_dump($a--);
    //  echo "<br>";
    //  var_dump($a);
    //  echo "<br>";
    //  echo 'Pre-decrement:', PHP_EOL;
    //  echo "<br>";
    //  $a = 5;
    //  var_dump(--$a);
    //  echo "<br>";

     echo '== Alphabetic strings =='. PHP_EOL;
     $s = 'W';
     for ($n=0; $n <6; $n++) { 
        echo ++$s . PHP_EOL;
        # code...
     }
    ?>
</body>
</html>