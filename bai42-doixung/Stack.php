<?php
class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 30)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($value)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $value);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
	  } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function size() {
        return count($this->stack);
    }
}