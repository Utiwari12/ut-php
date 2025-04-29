<?php
if (isset($_POST['user'])) {
    //echo "Welcome " . $_POST['user'];
    class User{
        function getName($user){
            echo "Welcome, User name is " . $user;
        }
    }
    $user = new User();
$user->getName($_POST['user']);
$hideForm = true;
}else{
    $hideForm = false;
}
// $user = new User();
// $user->getName($_POST['user']);
?>

<?php if (!$hideForm) {?>
    <form action="" method="post">
    <input type="text" name="user" placeholder="Enter your name">
    <br>
    <br>
    <button>Click</button>
</form>

<?php }?>