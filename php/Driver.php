<?php
include "structs/Set.php";
include "structs/ArrayList.php";
include "structs/LinkedList.php";
include "structs/Queue.php";
include "structs/PriorityQueue.php";

class TestLinkedList {
  public static function main(){
    $ll = new LinkedList();
    $ll -> add("Hello");
    $ll -> add("World");
    $ll -> add("This");
    $ll -> add("Is");
    $ll -> add("A");
    $ll -> add("Test");

    echo "Stored Values: ";
    $ll -> showValues();
    echo "\n";
  }
}

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
  
    $ll = new LinkedList();
    $ll -> add("Hello");
    $ll -> add("World");
    $ll -> add("Test");

    $p_queue = new PriorityQueue();
    $p_queue -> insert("Hello");
    $p_queue -> insert("John", 20);
    $p_queue -> insert("World");
    $p_queue -> insert("Edward", 100);
    $p_queue -> insert($set);
    $p_queue -> insert($ll, 30);

    $p_queue -> insert("top", 50);
    
    echo $p_queue . "\n\n";

    echo "Deleted: \n";
    echo $p_queue -> delete(true);
    echo "\n\n";

    $p_queue -> insertAtTop("Top Value");
    $p_queue -> insertAtBottom("Bottom Value");
    $p_queue -> insertAtBottom("True bottom");

    $p_queue -> insert("Hello again");
    
    echo $p_queue;
  }

}

TestPriorityQueue::main();