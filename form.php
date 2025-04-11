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
        <!-- <form action="checklogin.php" method="post"> -->
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" name="password" id="" placeholder="Password">
            <button type="submit" value="submit" name="submit">Login</button>
            <input type="reset" value="Reset">
        </form>
    </div>
      <!-- same  page login and password check -->
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo "Username is: " .$username;
        // echo "<br>";
        // echo "Password: " . $password;
        if (strcmp($username, "admin") == 0 && strcmp($password, "admin") == 0) {
            // echo "<font color='green'>Login successful</font>";
            // to redirect to another page after login
            header("Location: array.php");
        } else {
            echo "<font color='red'>Login failed</font>";
            # code...
        }
    }
        ?>
</body>
</html>