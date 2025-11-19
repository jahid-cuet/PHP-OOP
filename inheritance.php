<?php

class Fruit{
    protected $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }

 protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }

}


class Strawberry extends Fruit{


    public function message(){
          
    // Call protected method from within derived class - OK
        $this -> intro();
        return $this->name;
    }
}



$grasp = new Strawberry("Grasp","red");
echo $grasp->message();

?>



