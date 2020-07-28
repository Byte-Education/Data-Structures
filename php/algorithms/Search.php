<?php
class Search
{
  
  /**
   * Static function for binary search
   *
   * Run time: o(log(n))
   *
   * @param $collection an iterable comparable collection of values
   * @param $value value to be searched for
   * @param $min minimum index - default to 0
   * @param $max maximum index - default to null
   *
   * @return int index of the value, -1 if not found
   */
    public static function binarySearch($collection, $value, $min = 0, $max = null)
    {
        if ($max == null) {
            $max = sizeof($collection);
        }
        if ($min >= $max) {
            return -1;
        }
        $mid = (int)(($min + $max) / 2);
        if ($collection[$mid] == $value) {
            return $mid;
        } elseif ($collection[$mid] > $value) {
            return Search::binarySearch($collection, $value, $min, $mid);
        } else {
            return Search::binarySearch($collection, $value, $mid + 1, $max);
        }
    }

    /**
     * Linear search function
     *
     * Run time: o(n)
     *
     * @param $collection iterable comparable collection to search
     * @param $value specific value to be searched for
     *
     * @return int index of value if found, -1 if not
     */
    public static function linearSearch($collection, $value)
    {
        for ($i = 0; $i < sizeof($collection); $i++) {
            if ($collection[$i] == $value) {
                return $i;
            }
        }
        return -1;
    }

    /**
     * Jump search algorithm
     *
     * Jump up to a point then run a linear search
     *
     * @param $collection a collection of sorted values
     * @param $value a specific value being searched for
     */
    public static function jumpSearch($collection, $value)
    {
        $limit = sizeof($collection);
        $step = (int)(floor(sqrt($limit)));
        $prev = 0;
        while ($collection[min($step, $limit) - 1] < $value) {
            $prev = $step;
            $step += (int)(floor(sqrt($limit)));
            if ($prev >= $value) {
                return -1;
            }
        }
        while ($collection[$prev] < $value) {
            $prev++;
            if ($prev == min($step, $value)) {
                return -1;
            }
        }
        if ($collection[$prev] == $value) {
            return $prev;
        }
        return -1;
    }
}
