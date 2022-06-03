<?php
    Interface Animal {
        public function voice();
    }
    class Dog implements Animal {
        public function voice() {
            echo"Dog Sound:bark";
        }
        
    }
    class Cat implements Animal {
        public function voice() {
            echo "Cat sound:Meow";
        }
    }
    $animal = new Cat();
    $animal->voice();
    $animal = new Dog();
    $animal -> voice();
?>