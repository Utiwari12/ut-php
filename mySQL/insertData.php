
<form action="" method="post">
    <input type="text" placeholder="Enter Name" name="stname">
    <br>
    <br>
    <input type="text" placeholder="Enter Course" name="course">
    <br>
    <br>
    <input type="text" placeholder="Enter fees" name="fees">
    <br>
    <br>
    <button>Add New Student</button>

</form>

<?php
if (isset($_POST['stname'])) {
    $stname = $_POST['stname'];
    $course = $_POST['course'];
    $fees = $_POST['fees'];
    include 'config.php';

    $query = $conn->prepare(
    "INSERT INTO `student`(`id`, `stname`, `course`, `fees`)
            VALUES ('NULL','$stname','$course','$fees')"
    );

    $result = $query->execute();
    if ($result) {
        echo "Data Inserted Successfully";
    }else {
    echo "Connection failed";
    }
} else {
    echo "Data not insertrd";
}


?>