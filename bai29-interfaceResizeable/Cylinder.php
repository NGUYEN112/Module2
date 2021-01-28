<?php
include_once ('circle.php');
class Cylinder extends Circle {
 public $height;

 public function __construct($name,$value, $radius, $height)
 {
     parent::__construct($name,$value,$radius);
     $this->height = $height;
 }

 public function calculateArea()
 {
     return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
 }

 public function calculateVolume(){
     return parent::calculateArea() * $this->height;
 }
}