<?php

class Node
{
    /* Node index */
    public $index;

    /* Link to next node */
    public $next;

    function __construct($index)
    {
        $this->index = $index;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->index;
    }
}