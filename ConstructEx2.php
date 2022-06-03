<?php
    class human {
        public $name;
        public $age;
        public $place;
        public function __construct($name,$age,$place) {
            $this->name = $name;
            $this->age = $age;
            $this->place = $place;
        }
        
        public function __destruct()
        {
            //Destroying object
            echo $this->name;
            echo $this->age;
            echo $this->place;
        }
       

    }
  $person = new human("Manu",23,"kerala");  
  
   ?>