<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');


$circle = new Circle('Circle 01', 3);
$cylinder = new Cylinder('Cylinder 01', 3 , 4);
$rectangle = new Rectangle('Rectangle 01', 3 , 4);
$square = new Square('Square 01', 4 , 4, 4);


$geometric = [$circle,$cylinder,$rectangle,$square];

function randNum(){
    return rand(0,100);
}

foreach ($geometric as $value){
    echo "Diện tích hình" .$value->name."</br>";
    echo "Hiện tại".$value->calculateArea()."</br>";
    $value->resize(randNum());
    echo "sau khi resize".$value->calculateArea()."</br>";
    echo "<hr>";
}