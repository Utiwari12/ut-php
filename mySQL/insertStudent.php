<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student Details</title>
</head>
<body>

     <!-- Now Data is inserted through form -->

     <form method="post" action="insertStudent.php">
        id:<input type="text" name="id" placeholder="Enter ID">
        name:<input type="text" name="name" placeholder="Enter Name">
        class:<input type="text" name="class" placeholder="Enter Class">
        gender:<input type="text" name="gender" placeholder="Enter Gender">
        address:<input type="text" name="address" placeholder="Enter Address">
        <input type="submit" value="Submit" name="btnsubmit">
     </form>


    <?php
    
    if(isset($_POST['btnsubmit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
    }


    // Data is inserted without form
    // $name = "Sohan";
    // $class = "9";
    // $gender = "Male";
    // $address = "Garhwa";

    
    
    //1.Establishing connection with database
    $mycon = mysqli_connect
    (
        "localhost",
        "root",
        "",
        "students"
    );
    echo "Connection is established <br>";
    //2. Query to insert data into studentinfo table
    $sql = "insert into studentinfo  values(?,?,?,?,?)";
    $prepare=$mycon->prepare($sql);
    //$prepare->bind_param("isiss",$_POST['id'],$_POST['name'],$_POST['class'],$_POST['gender'],$_POST['address']);
     $prepare->bind_param("isiss", $id, $name, $class,  $gender, $address);
    $prepare->execute();
    echo "Data is inserted successfully <br>";
    //3. Closing connection
   
    ?>
</body>
</html>