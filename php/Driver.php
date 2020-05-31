<?php
include "structs/Set.php";
include "structs/ArrayList.php";
include "structs/LinkedList.php";
include "structs/Queue.php";
include "structs/PriorityQueue.php";


class TestQueue{
  public static function main(){
    $queue = new Queue();
    $queue -> enqueue("Hello");
    $queue -> enqueue("World");
    
    echo "Enqueued: ";
    $queue -> printData();
    echo "\n";
    
    echo "Dequeued: ";
    echo $queue -> dequeue();
    echo "\n";
    
    echo "Queue: ";
    $queue -> printData();
    echo "\n";
  }
}

class TestSet{
  public static function main(){
    $set = new Set();
    $set -> add("Hello");
    $set -> add("Hello");
    $set -> add("Bye");
    
    echo $set -> size();
  }
}

class TestPriorityQueue{
  public static function main(){
    $set = new Set();
    $set -> add("Hello");
    $set -> add("World");
  
    $p_queue = new PriorityQueue();
    $p_queue -> insert("hello");
    $p_queue -> insert("john", 20);
    $p_queue -> insert("world");
    $p_queue -> insert("edward", 100);
    $p_queue -> insert($set);
    echo "Data:\n";
    $p_queue -> printData();
    echo "\n";
    echo "Deleted: \n";
    echo $p_queue -> delete(true);
    echo "\n\n";
    echo "Data:\n";
    $p_queue -> printData();
    // echo "\n";
  }

}

TestPriorityQueue::main();