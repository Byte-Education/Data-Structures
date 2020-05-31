<?php

class Queue {
  private $data;

  public function __construct(){
    $this -> data = [];
  }

  public function __toString(){
    $str = "Queue Data:\n";
    $str .= join(" ", $this -> data);
    return $str;
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

?>