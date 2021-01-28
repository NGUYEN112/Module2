<?php
include_once ("LinkedList/SinglyLinkedList.php");
include_once ('AbstractPatient.php');

class Patient extends AbstractPatient{
    public $name;
    public $code;

    public function __construct() {
        $this->list = new SinglyLinkedList();
    }

    public function __toString()
    {
        return $this->code . ' ' . $this->name;
    }

    public function enqueue($name,$code)
    {
        $this->list->append($name,$code);
    }

    public function dequeue()
    {
        
    }

    public function isEmpty()
    {
        
    }

}