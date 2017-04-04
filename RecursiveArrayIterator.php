<?php
//$myArray = array(
//    0 => 'a',
//    1 => array('subA','subB',array(0 => 'subsubA', 1 => 'subsubB', 2 => array(0 => 'deepA', 1 => 'deepB'))),
//    2 => 'b',
//    3 => array('subA','subB','subC'),
//    4 => 'c'
//);
//
//$iterator = new RecursiveArrayIterator($myArray);
//iterator_apply($iterator, 'traverseStructure', array($iterator));
//
//function traverseStructure($iterator) {
//
//    while ( $iterator -> valid() ) {
//
//        if ( $iterator -> hasChildren() ) {
//
//            traverseStructure($iterator -> getChildren());
//
//        }
//        else {
//            echo $iterator -> key() . ' : ' . $iterator -> current() .PHP_EOL;
//        }
//
//        $iterator -> next();
//    }
//}

//class MyTree extends RecursiveIteratorIterator
//{
//
//}
//
//
//$iterator = new RecursiveArrayIterator(array(1, 2, array(3, 4, array(5, 6, 7), 8), 9, 10));
//
//while ( $iterator -> valid() ) {
//
//    if ( $iterator -> hasChildren() ) {
//
////        traverseStructure($iterator -> getChildren());
//        echo "has children \n";
//
//    }
//    else {
//        echo $iterator -> key() . ' : ' . $iterator -> current() .PHP_EOL;
//    }
//
//    $iterator -> next();
//}
//
//
//
////print_r($it);
//die;

$arr = array('Zero', 'name'=>'Adil', 'address' => array( 'city'=>'Dubai', 'tel' => array('int' => 971, 'tel'=>12345487)), '' => 'nothing');

$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($arr));

//var_dump(iterator_to_array($iterator,true));

foreach ($iterator as $key => $value) {
    $d = $iterator->getDepth();
    echo "depth=$d k=$key v=$value\n";
}
