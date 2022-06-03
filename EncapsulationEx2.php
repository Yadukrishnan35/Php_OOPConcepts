<?php
    class Student {
        public $name;
        public $age;
        public $place;
        public function __construct($name,$age,$place) {
            $this->name = $name;
            $this->age = $age;
            $this->place = $place;
        }
        public function score($mark) {
            
            if($mark>50){
                echo "Eligible for higher studies";
            }
            else
            {
                echo "Not eligible";
            }

        }
        public  function display() {
            echo $this->name ."\n";
            echo $this->age ."\n";
            echo $this->place ."\n";
            echo $this->score(20);
        }
      
    }
$st = new Student("manu",6,"kerala");
$st->display();
?>