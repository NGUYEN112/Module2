<?php
include_once ('stack.php');

$myStack = new Stack();
$myStack->push('hello may cung');
$myStack->push('hello 1');
$myStack->push('hello 2');
$myStack->push('hello 3');
$myStack->push('hello 4');
echo $myStack->top().'<br/>';
echo $myStack->top().'<br/>';
echo $myStack->top().'<br/>';
$myStack->push('hello 5');
$myStack->push('hello 6');
$myStack->isEmpty().'<br/>';
echo $myStack->pop().'<br/>';
echo $myStack->pop().'<br/>';
echo $myStack->pop().'<br/>';
echo $myStack->pop().'<br/>';
$myStack->isEmpty();
