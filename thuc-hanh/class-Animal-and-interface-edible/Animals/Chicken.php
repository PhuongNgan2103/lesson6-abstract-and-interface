<?php
include_once(dirname( __FILE__ ) . '/../AbstractClass/Animals.php');
include_once(dirname( __FILE__ ) . '/../InterfaceClass/Edible.php');

class Chicken extends Animals implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat()
    {
        return "could be fried";
    }
}