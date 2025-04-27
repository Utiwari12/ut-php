<?php

class CountrySale {
    static public $totalSales = 1000;
    function getTotalSales() {
        echo self::$totalSales;
        echo "<br>";
        echo static::$totalSales;
    }

    function getAreaName() {
       // echo self::areaName();
        echo static::areaName();
    }

    static function areaName() {
        echo "India";
    }
}

class CitySale extends CountrySale {
    static public $totalSales = 50;
    // function getTotalSales() {
    //     echo CitySale::$totalSales;
    // }

    static function areaName() {
        echo "Delhi";
    }
}
$citySale = new CountrySale();
$citySale = new CitySale();
//echo $citySale::$totalSales;
echo "<br>";
$citySale->getTotalSales();
echo "<br>";
$citySale->getAreaName();
?>