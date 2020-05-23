<?php

class ArrayList
{
    private $data;

    public function __construct()
    {
        $this -> data = [];
    }

    public function add(string $item)
    {
        $this -> data[] = $item;
    }

    public function contains(string $item)
    {
        for ($i = 0; $i < sizeof($this -> data); $i++) {
            if ($this -> data[$i] == $item) {
                return true;
            }
        }
        return false;
    }

    public function remove(int $index){
      if($index < 0 || $index > sizeof($this -> data) || sizeof($this -> data) ==0){
        return -1;
      }
      $value = $this -> data[$index];
      unset($this -> data[$index]);
      $this -> data = array_values($this -> data);
      return $value;
    }

    public function get(int $index){
      if($index < 0 || $index > sizeof($this -> data) || sizeof($this -> data) == 0) {
        return -1;
      }
      return $this -> data[$index];
    }
}
