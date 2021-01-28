<?php

include_once ('stack.php');

$stack = new Stack(10);
$stack->push('start');
$stack->push('1');
$stack->push('2');
$stack->push('3');
$stack->push('4');
$stack->push('5');
$stack->push('6');
var_dump($stack);
echo '<br/>';

$first = $stack->pop();
$second = $stack->pop();
$third = $stack->pop();
$fourth = $stack->pop();
$fifth = $stack->pop();
$sixth = $stack->pop();
$seventh = $stack->pop();
// $seventh = $stack->pop();

$stack->isEmpty();

$stack->push($first);
$stack->push($second);
$stack->push($third);
$stack->push($fourth);
$stack->push($fifth);
$stack->push($sixth);
$stack->push($seventh);

var_dump($stack);


