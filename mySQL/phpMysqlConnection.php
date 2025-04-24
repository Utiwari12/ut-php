<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <!-- connection mysql and database -->
    <?php
    $host = "localhost";
    $userName = "root";
    $password = "";
    $database = "beststoredb";

    $conn = new mysqli($host, $userName, $password, $database);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "Connected successfully";
    }
    echo "<br>";
    $result = $conn->query("show tables")->fetch_all();
    print_r($result);

    
    ?>
</body>
</html>