<?php

class Queue {
  private $data;

  public function __construct(){
    $this -> data = [];
  }

  public function printData(){
    for ($i = 0; $i < sizeof($this -> data); $i++) {
      echo $this -> data[$i];
      echo ", ";
    }
  }

  public function enqueue(string $item){
    $this -> data[] = $item;
  }

  public function dequeue(){
    if(sizeof($this -> data) == 0){
      return -1;
    }
    $value = $this -> data[0];
    unset($this -> data[0]);

    $this -> data = array_values($this -> data);
    return $value;
  }
}


$q = new Queue();
$q -> enqueue("Hello");
$q -> enqueue("World");
echo "Queued:";
$q -> printData();
echo "\n";

echo "Dequeued: ";
echo $q -> dequeue();
echo "\n";

echo "Queued:";
$q -> printData();
echo "\n";


?>