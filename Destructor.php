<?php
class Cars {
    public $name;
    public $colour;

    function __construct($name) {
        $this ->name = $name;
        //$this ->colour;
    }
    function __destruct()
    {
        echo $this->name;
        
    }
}
$car = new Cars("BMW");

?>