<?php

interface Animal{
    public function make_sound();
};

class Cat implements Animal{

     public function make_sound(){
        echo 'The Cat Sounds like : Meow <br>';
        }
    }

class Dog implements Animal{

     public function make_sound(){
             echo 'The Cat Sounds like : KhokKhok <br>';
     }
    }

class Cow implements Animal{

     public function make_sound(){
        echo 'The Cow Sounds like: Hamba';
     }
}

$cat=new Cat();
$dog=new Dog();
$cow=new Cow();

$animals=array($cat,$dog,$cow);

foreach ($animals as $animal) {
    $animal->make_sound();
}

?>