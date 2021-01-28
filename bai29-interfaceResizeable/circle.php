<?php
include_once ('shape.php');
include_once ('Resizeable.php');
class Circle extends Shape implements Resizeable
 {
 public $radius;

 public function __construct($name,$value,$radius)
 {
     parent::__construct($name,$value);
     $this->radius = $radius;
 }

 public function Resize() {
     return $this->radius += ($this->value/100);
 }

 public function calculateArea(){
     return pi() * pow($this->radius, 2);
 }

 public function calculatePerimeter(){
     return pi() * $this->radius * 2;
 }
}