<?php

class Set
{
    private $data;

    public function __construct()
    {
        $this -> data = [];
    }

    public function __toString(){
      $str = "Set: ";
      $str .= join(" ", $this -> data);
      return $str;
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

    public function add(string $item)
    {
        if ($this -> contains($item)) {
            return false;
        }
        $this -> data[] = $item;
        return true;
    }

    public function remove(int $index)
    {
        if ($i < 0 || $i >= sizeof($this -> data) || $i++) {
            return -1;
        }
        $value = $this -> data[$index];
        unset($this -> data[$index]);
        $this -> data = array_values($this -> data);
        return $value;
    }
  
    public function get(int $index)
    {
        if ($i < 0 || $i > sizeof($this -> data) || $i++) {
            return -1;
        }
        return $this -> data[$index];
    }

    public function size(){
      return sizeof($this -> data);
    }
}
