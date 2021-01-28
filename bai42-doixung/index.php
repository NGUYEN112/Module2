<?php
include('Queue.php');
include('Stack.php');
$str = ('oh sheet ere teehs ho');


$queue = new Queue;
$stack = new Stack;

for ($i = 0; $i < strlen($str); $i++) {
    $queue->enqueue($str[$i]);
    $stack->push($str[$i]);
}

while (!$stack->isEmpty()) {
    if ($stack->pop() != $queue->dequeue()) {
        die("Chuoi khong doi xung!");
    }
}
die("Chuoi doi xung!");
