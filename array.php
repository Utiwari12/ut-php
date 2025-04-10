<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    // $arr = array("patna","ranchi","bhagalpur","chapra",4,5, "garhwa");
    // for ($i=0; $i <count($arr) ; $i++) { 
    //     # code...
    //     echo $arr[$i] . "<br>";
    // }
     
    // echo "<br>";
    // $a = 0;
    // while ($a<count($arr)) {
    //     # code...
    //     echo $arr[$a] .  "<br>";
    //     $a++;
    // }
    // print_r($arr);
    // echo "<br>";
    // print_r($arr[0]);
    // echo "<br>";
    // print_r($arr[1]);

    //associative array or based index with array()
    // $arr1 = [1=>"patna",2=>"ranchi",3=>"bhagalpur",4=>"garhwa"];
    // print_r($arr1);
    //array slice

    //  $arr2 = array_slice($arr, 1,3);
    //  print_r($arr2);

    //inbuilt function
    // $arr1 = array("patna","ranchi", "jan","bhagalpur","chapra",4,5, "garhwa");
    // $arr2 = array("monday","tuesday","jan","wednesday","thursday","friday", "garhwa","saturday","sunday");
    // $arr3 = array("jan", "feb", "march", "april", "wednesday", "ranchi");

    // $newarr = array_intersect($arr1, $arr2);
    // print_r($newarr);
    // echo "<br>";
    // $newarr1 = array_diff($arr1, $arr2, $arr3);
    // print_r($newarr1);

    // $ar1 = array("Ram", "Mohan", "Ram", "Mohan", "Sohan");
    // $newar1 = array_unique($ar1);
    // print_r($newar1);
    // echo "<br>";
    // function add($n) {
    //     return $n+5;
    // }
    // $arr1 = [5,10, 12, 15, 20];
    // $newarr = array_map('add', $arr1);
    // print_r($newarr);

     $newar = range(1, 30 , 2);
    // print_r($newar);

    for ($i=0; $i <count($newar) ; $i++) 
    { 
        # code...
       echo $newar[$i]. "<br>";
    };
    //print_r($newar);

    ?>
</body>
</html>