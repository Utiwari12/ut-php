
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants in PHP</title>
</head>
<body>
   <?php
   //constants defined using the define()
   define("PI",3.14);
   echo PI;
   echo "<br>";
   $r = 10.5;
   $area = PI * $r * $r;
   echo  "Area of circle is:  " .$area . "<br>";
   $c = "Hello";
   echo $c . "<br>";
   
   
   ?>
</body>
</html>