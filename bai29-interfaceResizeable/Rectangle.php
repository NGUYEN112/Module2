<?php
include_once ('shape.php');
// include ('Resizeable.php');
class Rectangle extends Shape{
 public $width;
 public $height;

 public function __construct($name,$value, $width, $height)
 {
     parent::__construct($name,$value);
     $this->width = $width;
     $this->height = $height;
 }

 public function Resize($width) {
     return $this->width * ($this->value/100);
 }
 
 public function calculateArea(){
      return $this->height * $this->width;
 }

 public function calculatePerimeter(){
      return ($this->height + $this->width) * 2;
 }
}