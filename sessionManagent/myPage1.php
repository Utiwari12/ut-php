<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    echo "Username is: " . $user;
    echo "<br>";
    echo "Password is: " . $pass;
    session_start();
    $_SESSION['username2'] = $user;
    $_SESSION['userpass'] = $pass;

    ?>
    <form action="myPage2.php" method="post">
        <input type="submit" value="submit">
    </form>
</body>
</html>