<?php
class calculator {
    public $num1;
    public $num2;
    function addition($num1,$num2) {
        return $num1+$num2;
    }
    function display() {
        $result = $this->addition(5,6);
        echo $result;
    }
}
$res = new calculator();
$res ->display();
?>