<?php 
class Fruit{
    // properties
    public $name;
    public $color;

    // methods
    function set_name($name){
        $this->name=$name;
    }

    function get_name(){
        return $this->name;
    }
}


    $apple=new Fruit();
    $apple->set_name("apple");
    echo $apple->get_name();
?>