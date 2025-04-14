<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delet student record</title>
</head>
<body>
    <center>
        <h1>Delete Student</h1>
        
       <form method="post" action="deleteStudent.php">
        <table border="1">
            <tr>
                <th>Student Id for Delete</th>
                <td><input type="text" name="id" placeholder="Enter ID"></td>
                <br>
                

            </tr>
            <tr>
                <td>Student Name</td>
                <td><input type="text" name="name" placeholder="Enter Name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="class" placeholder="Enter Class"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="gender" placeholder="Enter Gender"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="address" placeholder="Enter Address"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Search" name="btnsubmit"></td>
            </tr>

        </table>
       </form>

       <?php
       if (isset($_POST['btnsubmit'])) {
           $id = $_POST['id'];
           $name = $_POST['name'];
           $class = $_POST['class'];
           $gender = $_POST['gender'];
           $address = $_POST['address'];
           //echo $id;
           //establish connection
           $mycon = mysqli_connect(
            "localhost",
            "root",
            "",
            "students" 
           );
           $sql = "SELECT * FROM `studentinfo` WHERE `id` = '$id'";
           $record = mysqli_query($mycon,$sql);
           $count = mysqli_num_rows($record);
           if ($count>0) {
            //echo "Record found <br>";
            session_start();
            $_SESSION['id'] = $id;
            echo "<table border=1>";
            echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Gender</th>
            <th>Address</th>
            </tr>";
            while ($row = mysqli_fetch_array($record)) {
                echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['class'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['address'] . "</td>
                <form >
                <td><input type='submit' value='Delete' name='btnsubmit'></td>
                </form>
                </tr>";
            }
            echo "</table>";
            $sql = "DELETE FROM `studentinfo` WHERE `id` = '$id'";
            $result = mysqli_query($mycon,$sql);
           } else {
            echo "Record not found <br>";
           }
        }
       ?>

        
      
    </center>
</body>
</html>