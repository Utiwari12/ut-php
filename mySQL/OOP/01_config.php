<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    //$database = 'dbsmschool';

    // $conn = new PDO("mysql:host=$host;dbname=dbsmschool", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Choose another database
    $database = 'students';
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>