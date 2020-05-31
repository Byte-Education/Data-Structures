<?php

 
/**
 * Node used for the priority queue
 *
 * @author Edward Rees
 * @version 1.0
 */
class QueueNode
{
    /**
     * Priority for the individual node
     *
     * Must be an integer
     *
     * @var int $priority priority for the individual node, must be an integer
     */
    private $priority;
    /**
     * Value of the individual node
     *
     * Can be any type
     *
     * @var string|int|boolean|object $value value of the individual node, can be any type
     */
    private $value;
    /**
     * Construct a new queue node
     *
     * @param int $priority priority of the node
     * @param $value value of the node
     */
    public function __construct(int $priority, $value)
    {
        // set the priority
        $this -> priority = $priority;
        // set the value
        $this -> value = $value;
    }

    /**
     * Returns a string representation of a queue node
     * @return string Priority: {priority}, Value: {value}
     */
    public function __toString()
    {
        return sprintf("Priority: %d, Value: %s", $this -> priority, $this -> value);
    }

    /**
     * Returns the value of the node
     *
     * @return $value the value of the node
     */
    public function getValue()
    {
        return $this -> value;
    }

    /**
     * Returns the current priority of the node
     *
     * @return $priority the priority of the node
     */
    public function getPriority()
    {
        return $this -> priority;
    }

    /**
     * Update the priority to a new priority
     * @param int $newPriority the new priority for the node
     */
    public function updatePriority(int $newPriority)
    {
        $this -> priority = $newPriority;
    }
}

/**
 * The Data structure representing a priority queue
 * 
 * @author Edward Rees
 * @version 1.0
 */
class PriorityQueue
{
    /** @var \QueueNode[] $queue The queue itself */
    private $queue;

    /** @var int $bottom the bottom value to be incremented */
    private $bottom;
    
    /** @var bool $maxQueue a boolean value checking if the priority is a max priority queue or min queue */
    private $maxQueue;

    /**
     * construct a new priority queue, sets properties to default values
     *
     * @param bool $maxQueue optional value whether a priority queue is a max queue or not
     */
    public function __construct(bool $maxQueue = true)
    {
        $this -> queue = [];
        $this -> bottom = 0;
        $this -> maxQueue = $maxQueue;
    }

    /**
     * Sort the data based on the priorities
     */
    private function sort()
    {
        if ($this -> maxQueue) {
            rsort($this -> queue);
        } else {
            sort($this -> queue);
        }
    }

    /**
     * Insert a new QueueNode using a specific value and an optional priority.
     * If no priority is given, will automatically add into queue and increment by 1
     * Once added, will sort data.
     *
     * @param $value specific value to be added
     * @param int $priority priority of given value / node, default value will increment from 0 onward.
     */
    public function insert($value, int $priority = -1)
    {
        if ($priority == -1) {
            $priority = $this -> bottom++;
        }
        $this -> queue[] = new QueueNode($priority, $value);
        $this -> sort();
    }

    /**
     * Get the most max or min value in the queue, based off of whether it is a max or min priority queue.
     *
     * @return \QueueNode node with the max or min value
     */
    public function peek()
    {
        if ($this -> maxQueue) {
            return $this -> queue[$this -> findMax()];
        } else {
            return $this -> queue[$this -> findMinx()];
        }
    }
    
    /**
     * Helper function to delete the maximum value
     *
     * @return \QueueNode maximum value after deleted
     */
    private function deleteMax()
    {
        try {
            $max = $this -> findMax();
            $item = $this -> queue[$max];
            unset($this -> queue[$max]);
            $this -> queue = array_values($this -> queue);
            return $item;
        } catch (Exception $exception) {
            echo "Error";
            return;
        }
    }
      
    /**
     * Helper function to delete the minimum value
     *
     * @return \QueueNode minimum value after deleted
     */
    private function deleteMin()
    {
        try {
            $min = $this -> findMin();
            $item = $this -> queue[$min];
            unset($this -> queue[$min]);
            $this -> queue = array_values($this -> queue);
            return $item;
        } catch (Exception $exception) {
            echo "Exception at: ";
            echo $exception;
            echo "\n";
            return;
        }
    }

    /**
     * Main delete function
     *
     * Delete value based on whether it is a max queue or min queue
     *
     * @return \QueueNode deleted value
     */
    public function delete()
    {
        if ($this -> maxQueue) {
            return $this -> deleteMax();
        } else {
            return $this -> deleteMin();
        }
    }

    /**
     * Print the data in the queue
     */
    public function printData()
    {
        for ($i = 0; $i < sizeof($this -> queue); $i++) {
            echo $this -> queue[$i];
            echo "\n";
        }
    }

    /**
     * Returns the size of the priority queue
     * @return int size of the queue
     */
    public function size()
    {
        return sizeof($this -> queue);
    }

    /**
     * Returns whether the queue is empty or not
     * @return bool empty or not
     */
    public function isEmpty()
    {
        return $this -> size() == 0;
    }

    /**
     * Finds the maximum value and returns the maximum priority value
     * @return int $max maximum priority value
     */
    public function findMax()
    {
        $max = 0;
        for ($i = 0; $i < sizeof($this -> queue); $i++) {
            if ($this -> queue[$i] > $this -> queue[$max]) {
                $max = $i;
            }
        }
        return $max;
    }

    /**
     * Finds the minimum value and returns the minimum priority value
     * @return int $min minimum priority value
     */
    public function findMin()
    {
        $min = 0;
        for ($i = 0; $i < sizeof($this -> queue); $i++) {
            if ($this -> queue[$i] < $this -> queue[$min]) {
                $min = $i;
            }
        }
        return $min;
    }
}
