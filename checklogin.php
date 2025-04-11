<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
        <h2>Login</h2>
        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo "Username is: " .$username;
        // echo "<br>";
        // echo "Password: " . $password;
        if (strcmp($username, "admin") == 0 && strcmp($password, "admin") == 0) {
            echo "<font color='green'>Login successful</font>";
        } else {
            echo "<font color='red'>Login failed</font>";
            # code...
        }
        ?>
    </div>
</body>
</html>