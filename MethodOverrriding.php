<?php
    class Fruit {
        public $name;
        public $colour;
        public function __construct($name,$colour) {
            $this->name = $name;
            $this->colour =$colour;
        }
        public function display() {
            echo "The Fruit is".$this->name;
            echo"The colour is".$this->colour;
        }        
            
}
    class Apple extends Fruit {
        public $weight;
        public function __construct($name,$colour,$weight) {
            $this->name=$name;
            $this->colour=$colour;
            $this->weight = $weight;
        }
    public function display() {
        echo "The Fruit is ".$this->name ."\n";
        echo"The colour is ".$this->colour ."\n";
        echo "The weight is ".$this->weight;
    }    
            
        }
    $apple = new apple("Apple","red",10);
    $apple-> display();
?>