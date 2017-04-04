<?php
/**
 * 双链表是一种重要的线性存储结构
 * 对于双链表中的每个节点
 * 不仅仅存储自己的信息
 * 还要保存前驱和后继节点的地址。
 */

/**
 * SplDoublyLinkedList implements Iterator  , ArrayAccess  , Countable  {

        public __construct ( void )
        public void add ( mixed $index , mixed $newval )
        //双链表的头部节点
        public mixed top ( void )
        //双链表的尾部节点
        public mixed bottom ( void )
        //双联表元素的个数
        public int count ( void )
        //检测双链表是否为空
        public bool isEmpty ( void )


        //当前节点索引
        public mixed key ( void )
        //移到上条记录
        public void prev ( void )
        //移到下条记录
        public void next ( void )
        //当前记录
        public mixed current ( void )
        //将指针指向迭代开始处
        public void rewind ( void )
        //检查双链表是否还有节点
        public bool valid ( void )

        //指定index处节点是否存在
        public bool offsetExists ( mixed $index )
        //获取指定index处节点值
        public mixed offsetGet ( mixed $index )
        //设置指定index处值
        public void offsetSet ( mixed $index , mixed $newval )
        //删除指定index处节点
        public void offsetUnset ( mixed $index )

        //从双链表的尾部弹出元素
        public mixed pop ( void )
        //添加元素到双链表的尾部
        public void push ( mixed $value )

        //序列化存储
        public string serialize ( void )
        //反序列化
        public void unserialize ( string $serialized )

        //设置迭代模式
        public void setIteratorMode ( int $mode )
        //获取迭代模式SplDoublyLinkedList::IT_MODE_LIFO (Stack style) SplDoublyLinkedList::IT_MODE_FIFO (Queue style)
        public int getIteratorMode ( void )

        //双链表的头部移除元素
        public mixed shift ( void )
        //双链表的头部添加元素
        public void unshift ( mixed $value )

        }
 */

/**
 * SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {}
 */
$list = new SplDoublyLinkedList();
// push() Pushes an element at the end of the doubly linked list
$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');
// unshift() Prepends the doubly linked list with an element

echo 'top node:' . $list->top() . PHP_EOL;
echo 'bottom node:' . $list->bottom() . PHP_EOL;

$list->unshift('M');
// echo $list->shift(); // Shifts a node from the beginning of the doubly linked list

// Rewind iterator back to the start
$list->rewind();

// Return current array entry
echo "current:" . $list->current() . PHP_EOL;

// Move to next entry
$list->next();
echo 'next node:' . $list->current() . PHP_EOL;

// Move to previous entry
$list->prev();
echo "prev node:" . $list->current() . PHP_EOL;

// Check whether the doubly linked list contains more nodes
if ($list->valid()) {
    echo "current node is valid" . PHP_EOL;
} else {
    echo "current node is invalid" . PHP_EOL;
}

/* if you want to replace an item at particular index you can use a method named add ,
 * note that if you want to replace an item that does not exist , an exception will be thrown
*/

// $list->add(5 , 2.24);

/**
 *
 * mode
 * There are two orthogonal sets of modes that can be set:
 * The direction of the iteration (either one or the other):
 * -SplDoublyLinkedList::IT_MODE_LIFO (Stack style)
 * -plDoublyLinkedList::IT_MODE_FIFO (Queue style)
 * The behavior of the iterator (either one or the other):
 * -SplDoublyLinkedList::IT_MODE_DELETE (Elements are deleted by the iterator)
 * -SplDoublyLinkedList::IT_MODE_KEEP (Elements are traversed by the iterator)
 * The default mode is: SplDoublyLinkedList::IT_MODE_FIFO | SplDoublyLinkedList::IT_MODE_KEEP
 */

// Returns the mode of iteration
// $list->getIteratorMode();
//$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
//$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
//$list->rewind();
//while ($list->valid()) {
//    echo $list->current() . PHP_EOL;
//    $list->next();
//}


//$a = $list->serialize();
//print_r($list->unserialize($a));

/**
 *
 * SplDoublyLinkedList::offsetExists — Returns whether the requested $index exists
 * SplDoublyLinkedList::offsetGet — Returns the value at the specified $index
 * SplDoublyLinkedList::offsetSet — Sets the value at the specified $index to $newval
 * SplDoublyLinkedList::offsetUnset — Unsets the value at the specified $index
 *
 */

// $list->offsetSet(0, 'X');
// $list->offsetUnset(0);
//var_dump([
//    'offsetExists' => $list->offsetExists(4),
//    'offsetGet' => $list->offsetGet(0),
//]);


print_r($list);
