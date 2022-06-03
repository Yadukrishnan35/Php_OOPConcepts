<?php
class ArithmeticOperation {
    public $num1;
    public $num2;

    function __construct($num1,$num2) {
        $this->num1 = $num1;
        $this ->num2 = $num2;
    }
}
class Display extends ArithmeticOperation {
    function __destruct() {
        echo $this->num1 + $this->num2;
    }

}
$n1 = readline("First Number:");
$n2 = readline("Second Number:");
$result = new Display($n1,$n2);