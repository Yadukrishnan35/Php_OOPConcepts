<?php
    //Single Inheritance
    class Robort {
        public function talk() {
            echo "Robort can Talk" ."\n";
        }
        public function walk() {
            echo "Robort can Walk" ."\n";
        }
    }

    class Rob1 extends Robort {
        public function sing() {
            echo "Robort can sing" ."\n";
        }

    }
    $r1= new Rob1();
    $r1->sing();
    $r1->talk();
    $r1->walk();
?>