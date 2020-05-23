<?php
include "structs/Set.php";
include "structs/ArrayList.php";
include "structs/LinkedList.php";
include "structs/Queue.php";


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

?>