<?php
class Factorial {

  /**
   * Recursive version of factorial
   * @param int $n n!
   */
  public static function recursive(int $n): int{
    if($n == 1 || $n == 0){
      return 1;
    }
    return $n * recursive($n - 1);
  }

  /**
   * Iterative version of factorial
   * @param int $n n!
   */
  public static function iterative(int $n): int {
    $fact = 1;
    for($i = 1; $i < $n + 1; $i++){
      $fact *= $i;
    }
    return $fact;
  }
  
}