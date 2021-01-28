<?php
include_once ('Rectangle.php');
// include ('Resizeables.php');
class Square extends Rectangle{
 public function __construct($name,$value, $width)
 {
 parent::__construct($name,$value, $width, $width, $width);
 }

 public function Resize($width) {
    return $this->width * ($this->value/100);
}
}