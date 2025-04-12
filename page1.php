<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>

</head>
<body>
    <?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $cookie_name = "username";
    $cookie_value = $user;
    $cookie_pass = "password";
    $cookie_pass_value = $pass;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    setcookie($cookie_pass, $cookie_pass_value, time() + (86400 * 30), "/");

    echo "Username is: " . $user;
    echo "<br>";
    echo "Password is: " . $pass;
    ?>
    <form action="page2.php" method="post">
        <input type="submit" value="submit">
    </form>
</body>
</html>