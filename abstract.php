<?php
abstract class Car{

    public $name;
    public function __construct($name)
    {
        $this->name=$name;

    }

    abstract public function intro():string;
}


class Audi extends Car{

    public function intro():string{
        return "the car name is $this->name";
     }
}

$audi=New Audi('Audi');
echo $audi->intro()

?>