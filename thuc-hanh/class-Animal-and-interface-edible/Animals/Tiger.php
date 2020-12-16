<?php
include_once(dirname( __FILE__ ) . '/../AbstractClass/Animals.php');
class Tiger extends Animals
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";
    }
}