<?php

class User{
    public $name = "Upendra Tiwari";
    // public function __get($name){
    //     return "Your name is " . $this->name;
    // }

    private $age= "40";

    function __get($property){
        echo "$property is not exist";
        
    }
}

$user = new User();
//echo $user->nam;
echo $user->name;
echo "<br>";
echo $user->age;

?>