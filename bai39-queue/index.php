<?php
include_once('Queue.php');

$queue = new Queue;
$queue->enqueue('Start');
$queue->enqueue('1');
$queue->enqueue('2');
echo $queue->dequeue().'<br/>';
echo $queue->dequeue().'<br/>';
$queue->isEmpty();
$queue->enqueue('3');
$queue->enqueue('4');
echo $queue->dequeue().'<br/>';
echo $queue->dequeue().'<br/>';
echo $queue->dequeue().'<br/>';
echo $queue->isEmpty();


