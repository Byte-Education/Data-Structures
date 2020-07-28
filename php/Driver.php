<?php
include "structs/Set.php";
include "structs/ArrayList.php";
include "structs/LinkedList.php";
include "structs/Queue.php";
include "structs/PriorityQueue.php";
include "algorithms/Search.php";
include "algorithms/Factorial.php";

class TestLinkedList
{
    public static function main()
    {
        $ll = new LinkedList();
        $ll -> add("Hello");
        $ll -> add("World");
        $ll -> add("This");
        $ll -> add("Is");
        $ll -> add("A");
        $ll -> add("Test");

        echo "Stored Values: ";
        echo $ll;
        echo "\n";
    }
}

class TestQueue
{
    public static function main()
    {
        $queue = new Queue();
        $queue -> enqueue("Hello");
        $queue -> enqueue("World");
    
        echo "Enqueued: ";
        echo $queue;
        echo "\n";
    
        echo "Dequeued: ";
        echo $queue -> dequeue();
        echo "\n";
    
    
        echo $queue;
    }
}

class TestSet
{
    public static function main()
    {
        $set = new Set();
        $set -> add("Hello");
        $set -> add("Hello");
        $set -> add("Bye");
    
        echo $set -> size();
    }
}

class TestPriorityQueue
{
    public static function main()
    {
        $set = new Set();
        $set -> add("Hello");
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

        echo "Deleted: \n" . $p_queue -> delete() . "\n\n";

        $p_queue -> insertAtTop("Top Value");
        $p_queue -> insertAtBottom("Bottom Value");
        $p_queue -> insertAtBottom("True bottom");

        $p_queue -> insert("Hello again");
    
        echo $p_queue;
        echo "\n\n";
        $p_queue -> resetCount();

        $p_queue -> insertAtTop("Top Value 2");
        $p_queue -> insert("Second top");
        $p_queue -> insertAtBottom("New Bottom");
        echo $p_queue;

        $p_queue -> resetCount();

        echo "\n\nDeleted: " . $p_queue -> delete();

        echo "\n\n";
        echo $p_queue;

        
    }
}

TestPriorityQueue::main();


class TestAlgorithms{
  public static function jumpSearchTest($collection){
    echo Search::jumpSearch($collection, 2);
  }

  public static function factorialTest(){
    echo "Recursive: 10! = " . Factorial::recursive(10) . "\n";
    echo "Iterative: 10! = " . Factorial::iterative(10) . "\n";
  }

  public static function main(){
    $collection = array(1,1,2,3,5,8,13,21,34);
    jumpSearchTest($collection);
  }
}

// TestAlgorithms::main();
