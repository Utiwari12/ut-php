<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <center>
        <?php
        $mycon = mysqli_connect(
            "localhost",
            "root",
            "",
            "students"
        );
        session_start();
        $id = $_SESSION['id'];
        $sql = "DELETE FROM `studentinfo` WHERE `id` = ?";
        $result = $mycon->prepare($sql);
        $result ->bind_param("i", $id);
        $result->execute();
        echo "Record deleted successfully";

        ?>
    </center>
    
</body>
</html>