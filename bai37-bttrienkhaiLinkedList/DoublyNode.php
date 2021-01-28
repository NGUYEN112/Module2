<?php
class DoublyNode 
{
    public $index;
    public $previous;
    public $next;
    
    public function __construct($index = NULL)
    {
        $this->index = $index;
        $this->previous = NULL;
        $this->next = NULL;
    }


}