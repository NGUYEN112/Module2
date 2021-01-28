<?php
include_once ('circle.php');
include_once ('Cylinder.php');

$circle = new Circle('Circle shape', 3,'red');
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo 'Circle color: ' .$circle->color(). '<br/>';

$cylinder = new Cylinder('Cylinder shape', 3 ,'blue', 4,);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
echo 'Cylinder color: ' .$cylinder->color(). '<br/>';