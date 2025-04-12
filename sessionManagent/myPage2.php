<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPage2</title>
</head>
<body>
    <h2>My Page 2</h2>
    <?php
    session_start();
    $uname = $_SESSION['username2'];
    $upass = $_SESSION['userpass'];
    echo "Username is in second page: " . $uname;
    echo "<br>";
    echo "Password is in second page: " . $upass;

    //to stop session it means data will not be fetched in 3rd or next page
    session_unset();
    session_destroy();
    ?>
</body>
</html>