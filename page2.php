<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Page 2</h2>
    <?php
   $user = $_COOKIE["username"];
   $pass = $_COOKIE["password"];
   echo "Username is in second page: " . $user;
   echo "<br>";
   echo "Password is in second page: " . $pass;
    ?>
</body>
</html>