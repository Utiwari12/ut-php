<?php

class Company{
    public function getName(){
        echo "The company name is Tata Motors.<br>";
        return $this;
    }
    public function getEmployee(){
        echo "The company has 200 employees.<br>";
        return $this;
    }
    public function getOffice(){
        echo "The company has many offices.<br>";
        return $this;
    }
    public function getAddress(){
        echo "The company has many addresses.<br>";
        return $this;
    }
}

$company = new Company();

$company->getName()->getEmployee()->getOffice()->getAddress();


?>