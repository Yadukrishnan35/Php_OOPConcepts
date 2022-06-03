<?php
    class Employee {
        public $name;
        public $position;

        public function __construct($name,$position) {
            $this ->name = $name;
            $this ->position = $position;
        }
        public function __destruct()
        {
            echo "Object Destroying...";
            echo $this->name;
            echo $this->position;
        }
        
 
    }
    $emp = new Employee("Yadu","Developer");
      
?>