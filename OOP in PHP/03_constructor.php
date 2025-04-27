<?php
class ConsructorDemo{
    public $name;
     function __construct(){
        
         echo "This is constructor <br>";
         $this->name = "Mohan";
     }
     function displayName(){
        echo $this->name;
     }

}
$consructorDemo = new ConsructorDemo();
$consructorDemo->displayName();

?>