<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparision Operators</title>
</head>
<body>
    <?php
      $a = 50;
      $b = 30;
    //   echo ($a = $b);
    //   echo "<br>";
    //   echo ($a == $b);
    //   echo "<br>";
      echo ($a > $b);
      echo "<br>";

      $x = 10; //int
      $y = "10";  //string
      $z = 10;  //int
      if (($x ===$y)==$z) {
        echo "Hello";

        # code...
      }else {
        echo "Bye";
      }
      echo "<br>";
    ?>
</body>
</html>



/*
Comparison operators, as their name implies, allow you to compare two values. You may also be interested in viewing the type comparison tables, as they show examples of various type related comparisons.

Comparison Operators
Example
Name
Result
$a == $b
Equal
true if $a is equal to $b after type juggling.
$a === $b
Identical
true if $a is equal to $b, and they are of the same type.
$a != $b
Not equal
true if $a is not equal to $b after type juggling.
$a <> $b
Not equal
true if $a is not equal to $b after type juggling.
$a !== $b
Not identical
true if $a is not equal to $b, or they are not of the same type.
$a < $b
Less than
true if $a is strictly less than $b.
$a > $b
Greater than
true if $a is strictly greater than $b.
$a <= $b
Less than or equal to
true if $a is less than or equal to $b.
$a >= $b
Greater than or equal to
true if $a is greater than or equal to $b.
$a <=> $b
Spaceship
An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.

*/

