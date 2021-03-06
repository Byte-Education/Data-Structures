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
    public function __toString() : string
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
    public function getPriority() : int
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
 * Capabilities:
 *
 * - Insert at given index
 *
 * - Insert at counting incrementing index
 *
 * - Insert at top
 *
 * - Insert at bottom
 *
 * - Delete from top
 *
 * - Peek the top
 *
 * - Peek the bottom
 *
 * - Reset the count to a normal incremental count
 *
 * @author Edward Rees
 * @version 1.0
 */
class PriorityQueue
{
    /** @var \QueueNode[] $queue The queue itself */
    private $queue;

    /** @var int[] $valuesUsed values used */
    private $valuesUsed;

    /** @var int $index the index value to be incremented */
    private $index;

    /** @var int $bottom the bottom value to be placed at bottom */
    private $bottom;

    /** @var int $top the top value to emphasize top value */
    private $top;

    /** @var int TOP_STEP Skip value for top */
    private const TOP_STEP = 5;

    /**
     * construct a new priority queue, sets properties to default values
     *
     * @param bool $maxQueue optional value whether a priority queue is a max queue or not
     */
    public function __construct()
    {
        $this -> queue = [];
        $this -> valuesUsed = [];
        $this -> index = 0;
        $this -> top = 0;
        $this -> bottom = 0;
    }

    /**
     * Return the string representation of the priority queue
     */
    public function __toString() : string
    {
        $str = "Priority Queue Data:\n";
        $str .= join("\n", $this -> queue);
        return $str;
    }

    /**
     * Sort the data based on the priorities
     */
    private function sort() : void
    {
        rsort($this -> queue);
    }

    /**
     * Insert a new QueueNode using a specific value and an optional priority.
     * If no priority is given, will automatically add into queue and increment by 1
     * Once added, will sort data.
     *
     * @param $value specific value to be added
     * @param int $priority priority of given value / node, default value will increment from 0 onward.
     */
    public function insert($value, int $priority = null) : void
    {
        if ($priority == null) {
            $priority = $this -> index++;
        }
        $this -> queue[] = new QueueNode($priority, $value);
        $this -> valuesUsed[] = $priority;
        $this -> sort();
    }

    /**
     * Insert at the top of the priority queue
     *
     * Updates index value to the previous top index
     *
     * @param $value value to be added at top
     */
    public function insertAtTop($value) : void
    {
        $this -> top = $this -> peekTop() -> getPriority();
        $previousTop = $this -> top;
        $this -> top += self::TOP_STEP;
        $this -> insert($value, $this -> top);
        $this -> index = $previousTop + 1;
    }

    /**
     * Insert at the bottom of the priority queue
     *
     * @param $value value to be added at bottom
     */
    public function insertAtBottom($value) : void
    {
        $this -> bottom = $this -> peekBottom() -> getPriority();
        $this -> insert($value, --$this -> bottom);
    }
    /**
     * Get the most max value in the queue
     *
     * @return \QueueNode node with the max or min value
     */
    public function peekTop() : QueueNode
    {
        return $this -> queue[$this -> findMax()];
    }

    /**
     * Peek the bottom value in the priority queue
     *
     * @return \QueueNode node with the min or max value
     */
    public function peekBottom() : QueueNode
    {
        return $this -> queue[$this -> findMin()];
    }
    
    
    /**
     * Main delete function
     *
     * Delete value based on whether it is a max queue or min queue
     *
     * @return \QueueNode deleted value
     */
    public function delete() : QueueNode
    {
        if ($this -> isEmpty()) {
            echo "Empty queue, nothing to delete\n";
            return null;
        }
        try {
            $max = $this -> findMax();
            $item = $this -> queue[$max];
            unset($this -> queue[$max]);
            $this -> queue = array_values($this -> queue);
            $this -> top = $this -> findMax();
            return $item;
        } catch (Exception $exception) {
            echo "Error";
            return null;
        }
    }

    /**
     * Returns the size of the priority queue
     *
     * @return int size of the queue
     */
    public function size() : int
    {
        return sizeof($this -> queue);
    }

    /**
     * Returns whether the queue is empty or not
     *
     * @return bool empty or not
     */
    public function isEmpty() : bool
    {
        return $this -> size() == 0;
    }

    /**
     * Finds the maximum value and returns the maximum priority value
     *
     * @return int $max maximum priority value
     */
    public function findMax() : int
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
     *
     * @return int $min minimum priority value
     */
    public function findMin() : int
    {
        $min = 0;
        for ($i = 0; $i < sizeof($this -> queue); $i++) {
            if ($this -> queue[$i] < $this -> queue[$min]) {
                $min = $i;
            }
        }
        return $min;
    }

    /**
     * Reset the count to a basic incrementing system
     *
     * Called when top hits some limit
     *
     * Resets Top, Bottom, and Index
     */
    public function resetCount() : void
    {
        $this -> bottom = 0;
        $this -> index = 0;
        for ($i = $this -> size() - 1; $i >= 0; $i--) {
            $prevValue = $this -> queue[$i] -> getValue();
            $this -> valuesUsed[$i] = $this -> index;
            $this -> queue[$i] -> updatePriority($this -> index++);
        }

        $this -> top = $this -> index;
    }
}
