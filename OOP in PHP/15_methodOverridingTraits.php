<?php

trait ParentCompany1{
    function getEmployees(){
        echo 200;
    }
}

trait ParentCompany2{
    function getEmployees(){
        echo 300;
    }
}
class Company{
    
    //Over riding of child company to parent company so output is 100
    // function getEmployees(){
    //     echo 100;
    // }
    use ParentCompany1;
    use ParentCompany2{
        parentCompany1::getEmployees insteadof ParentCompany2;
        parentCompany2 ::getEmployees as getEmployeesCompany2;
    }
}

$company1 = new Company();
$company1->getEmployees();
echo "<br>";
$company1->getEmployeesCompany2();
?>