<?php
class Honda {
    function companyName() {
        echo "Honda";
    }

    static public $countryName = "Japan";
    static function modelName() {
        echo "Civic";
    }
}

$honda = new Honda();
$honda->companyName();
echo "<br>";
Honda::modelName();
echo "<br>";
echo Honda::$countryName;
?>