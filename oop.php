

<?php

class Car{
    public $name;
    public $color;
    public $Price;

    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
}

$Car1=new Car('Marceds','Red');
// $Car1->get_name('Marcedes','Red');
echo $Car1->color;

echo $Car1->name;

?>