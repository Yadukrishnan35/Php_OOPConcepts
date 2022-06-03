<?php
    class operations {

        public $num1;
        public $num2;

        function __construct($num1,$num2) 
        {
            $this->num1 = $num1;
            $this->num2 = $num2;

        }
        function getData() {
           echo $this->num1+$this->num2 ."\n";
           echo $this->num2-$this->num1;

    }
}
 $calc = new operations(5,2);
 $calc->getData(); 
?>