<?php
class Shape{
    public $name;
    public $value;

    public function __construct($name,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}