<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php
    echo "<font color='red'>Welcome to PHP</font>";
    echo "<br>";
    echo "<center><h1>Welcome to PHP</h1></center>";
    print "<br> welcome to Patna";

    $a = 10;
    echo "<br>";
    echo "value of a is:" .$a; // . is concatenation operator
    echo "<br>";
    echo $a + 20;
    echo "<br>";
    echo $a - 20;
    echo "<br>";
    echo $a * 20;
    echo "<br>";
    echo $a / 20;
    echo "<br>";
    echo $a % 20;
    echo "<br>";
    echo $a ** 20;

    echo "<br>";
    $b = 20;
    $c = $a + $b;
    echo "<br> Addition of ".$a." and ".$b." is " .$c;

    ?>
    </center>
</body>
</html>