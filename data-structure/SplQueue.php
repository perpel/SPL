<?php
/**
 * The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.
 * SplQueue extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {}
 */
$queue = new SplQueue();

$queue->enqueue("a");
$queue->enqueue("b");
$queue->enqueue("c");
$queue->enqueue("d");

echo 'top node:' . $queue->top() . PHP_EOL;
echo 'bottom node:' . $queue->bottom() . PHP_EOL;

$queue->offsetSet(0, 'A');

echo $queue->dequeue() . PHP_EOL;
echo $queue->dequeue() . PHP_EOL;

print_r($queue);