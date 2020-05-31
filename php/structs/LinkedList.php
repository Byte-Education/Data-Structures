<?php
class Node {
  private $data;
  private $next;

  public function __construct(string $data) {
    $this->data = $data;
    $this->next = null;
  }

  public function getNext(){
    return $this->next;
  }

  public function setNext(Node $next){
    $this->next = $next;
  }

  public function getData(){
    return $this->data;
  }
}

class LinkedList {
  private $head;
  public function __construct() {
    $this->head = null;
  }

  public function __toString(){
    $str = "LinkedList: ";
    $temp = $this -> head;
    if($temp == null){
      return "";
    } 
    while($temp != null){
      $str .= $temp -> getData();
      $str .= " ";
      $temp = $temp -> getNext();
    }
    return $str;
  }

  public function size(){
    $count = 0;
    while($temp != null){
      $count++;
      $temp = $temp -> getNext();
    }
    return $count;
  }

  public function add(string $data){
    $temp = new Node($data);
    if($this->head == null){
      $this->head = $temp;
      return;
    } else if($this -> head -> getNext() == null){
      $this -> head -> setNext($temp);
      return;
    } else {
      $curr = $this -> head;
      while($curr -> getNext() != null){
        $curr = $curr -> getNext();
      }
      $curr -> setNext($temp);
      return;
    }
  }

  public function contains(string $data){
    $temp = $this -> head;
    while($temp != null){
      if($temp -> getData() == $data){
        return 1;
      }
      $temp = $temp -> getNext();
    }
    return 0;
  }

  public function remove(int $index){
    $temp = $this -> head;
    if($index == 0){
      if($this -> head -> getNext() == null){
        $this -> head = null;
        return $temp -> getData();
      } else {
        $temp = $this -> head;
        $this -> head = null;
        $this -> head = $temp -> getNext();
        return $temp -> getData();
      }
    } else {
      $count = 0;
      if($index != $this -> size() - 1){
        while($count + 1 != $index && $temp -> getNext() -> getNext() != null){
          $temp = $temp -> getNext();
          $count++;
        }
        $next = $temp -> getNext();
        $temp -> setNext($next -> getNext());
        return $next -> getData();
      } else {
        while($count + 1 != $this -> size()){
          $temp = $temp -> getNext();
          $count++;
        }
        $data = $temp -> getData();
        $temp = null;
        return $data;
      }
    }
  }
  

  public function showValues(){
    $temp = $this->head;
    while ($temp != null) {
      print $temp -> getData();
      print " ";
      $temp = $temp -> getNext();
    }
  }

}



?>