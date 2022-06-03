<?php
class Employee {

    public $name;
    public $position;
    
    function __construct($name,$position) 
    {
        $this->name = $name;
        $this->position = $position;

    }
    function getData() {
        echo $this->name ."\n";
        echo $this->position; 
    
    }
}
$person = new Employee("Yadu","Developer");
$person ->getData();
?>