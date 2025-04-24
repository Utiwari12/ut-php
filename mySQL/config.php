<?php
$host = "localhost";
$userName = "root";
$password = "";
//$database = "dbsmschool";

$conn = new PDO("mysql:host=$host;dbname=dbsmschool", $userName, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully";
?>