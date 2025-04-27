<?php

// class Honda {}

// class Cars extends Honda {

// }

// $car = new Cars();

class Honda {
    final function companyName() {
        echo "Honda";
    }
}

class Cars extends Honda {
    //  function companyName() {
    //     echo "Honda City";
    // }
}

$car = new Cars();
$car->companyName();
?>