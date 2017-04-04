<?php
/**
 * SplStack类 通过使用一个双向链表来提供栈的主要功能。
 * SplStack extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {}
 */
$stack = new SplStack();

$stack->push("a");
$stack->push("b");
$stack->push("c");
$stack->push("d");

echo 'top node:' . $stack->top() . PHP_EOL;
echo 'bottom node:' . $stack->bottom() . PHP_EOL;

print_r($stack);

echo $stack->pop() . PHP_EOL;
echo $stack->pop() . PHP_EOL;

//堆栈的offset=0是Top所在的位置，offset=1是Top位置节点靠近bottom位置的相邻节点，以此类推
echo $stack->offsetSet(0, 'B');

/**
 * 双向链表的rewind和堆栈的rewind相反,
 * 堆栈的rewind使得当前指针指向Top所在的位置,
 * 而双向链表调用之后指向bottom所在位置,
 * 堆栈的next操作使指针指向靠近bottom位置的下一个节点,
 * 而双向链表是靠近top的下一个节点
 */
$stack->rewind();
echo 'current:' . $stack->current() . PHP_EOL;
$stack->next();
echo 'current:' . $stack->current() . PHP_EOL;

print_r($stack);