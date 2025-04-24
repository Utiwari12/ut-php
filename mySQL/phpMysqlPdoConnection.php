<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>PHP PDO Connection</h1>
        <?php
        $host = "localhost";
        $userName = "root";
        $password = "";
        // $database = "dbsmschool";

         //PDO means PHP Data Objects
        try {
            $conn = new PDO("mysql:host=$host;dbname=dbsmschool", $userName, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected Successfully";
   
        } catch (PDOException $err) {
            echo "Connection Failed: " . $err->getMessage();
            
        }
        echo "<br>";
        $result = $conn->query("show tables");
        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            print_r($row);
            # code...
        }
        

        ?>
    </center>
</body>
</html>