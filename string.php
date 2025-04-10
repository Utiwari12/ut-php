<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $str = "Hello world";
    // echo $str . "<br>";
    // echo  "Length of string: " . strlen($str) . "<br>";
    // echo "Number of words: " . str_word_count($str) . "<br>";
    // echo "Reverse string: " . strrev($str) . "<br>";
    // echo "Position of world: " . strpos($str, "world") . "<br>";
    // echo "Replace world with PHP: " . str_replace("world", "PHP", $str) . "<br>";

    // $mystr = "Hello World how are you";
    // $newstr = str_replace("world", "PHP", $mystr);
    // echo $newstr;
    // echo "<br>";
    // $newstr = "Split of string: " .chunk_split($mystr, 3, ". ");
    // echo $newstr;
    // echo "<br>";
    // $newarr =  str_split($mystr, 3);
    // print_r($newarr);

    //to convert upper case
    // $newstr = strtoupper($mystr);
    // echo $newstr;
    // echo "<br>";
    //to convert lower case
    // $newstr = strtolower($mystr);
    // echo $newstr;
    // echo "<br>";

    // $ramstr = "sita ram sita ram";
    // $newstr = ucfirst($ramstr);
    // echo $newstr;
    // echo "<br>";
    // $sitastr = "Sita ram sita ram rma ram ram";
    // $newstr = lcfirst($sitastr);
    // echo $newstr;
    // echo "<br>";

    // $n = substr_count($sitastr, "ram");
    // echo $n;
    
    //comparing of two string
    //strcmp are case sensetive
    $str1 = "Patna";
    $str2 = "Patna";
    if (strcmp($str1,$str2)==0) {
        echo "same";
    }else{
        echo "not same";
    };

    //strcasecmp are not case sensatine
    echo "<br>";
    $str1 = "Patna";
    $str2 = "Delhi";
    if (strcasecmp($str1,$str2)==0) {
        echo "same";
    }else{
        echo "not same";
    };

    


    
    ?>
</body>
</html>