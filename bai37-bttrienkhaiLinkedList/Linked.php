<?php
include_once('DoublyNode.php');
class newNodeedList
{
    public $count = 0;
    public $firstNode;
    public $lastNode;
    private $head;
    private $tail;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function add()
    {
    }

    public function addFirst($index)
    {
        $newNode = new Node($index);
       if(!$this->isEmpty()) {
           $this->head->
       }
}
