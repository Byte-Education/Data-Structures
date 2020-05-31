<?php
class Search {
  
  public static function binarySearch($collection, $value, $min = 0, $max = null){
    if($max == null){
      $max = sizeof($collection);
    }
    if($min >= $max){
      return -1;
    }
    $mid = (int)(($min + $max) / 2);
    if($collection[$mid] == $value){
      return $mid;
    } else if($collection[$mid] > $collection[$min]){
      return Search::binarySearch($collection, $value, $mid + 1, $max);
    } else {
      return Search::binarySearch($collection, $value, $min, $mid);
    }
  }
}


$collection = array ();
$collection[] = 1;
$collection[] = 5;
$collection[] = 8;
$collection[] = 10;
$collection[] = 12;
echo Search::binarySearch($collection, 1);