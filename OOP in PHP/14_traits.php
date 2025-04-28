<?php

trait parentCompany{
    function getTotalEmployees(){
        echo "Total Employees: 500 ";
    }

    function getTotalProjects(){
        echo "Total Projects: 20 ";
    }
}

trait getTotalOffices{
    function getTotalOffices(){
        echo "Total Offices: 10 ";
    }
}


class Company{
    use parentCompany;
    use getTotalOffices;
};

$company = new Company();
$company->getTotalEmployees();
echo "<br>";
$company->getTotalProjects();
echo "<br>";
$company->getTotalOffices();

?>