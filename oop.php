<!-- PHP built-in server ==> php -S localhost:8000 -->
 <!-- Open VS Code terminal and run:  php test.php -->




<?php 
class Fruit{
    // properties
    public $name;
    public $color;

    // methods
    function set_name($name){
        $this->name=$name;
    }

}


    $apple=new Fruit();
    $apple->set_name("apple");
    echo $apple->name;
?>