<?php

class User{
    // function getName(){
    //     echo "Welcome to PHP OOP by Upendra Tiwari";
    // }
    function __invoke(){
        echo "Welcome to PHP OOP magic method by Upendra Tiwari";
    }

    function school(){
        echo "Your school name is XYZ School";
    }
}

$user = new User();
//$user->getName();
$user();
echo "<br>";
$user->school();

?>