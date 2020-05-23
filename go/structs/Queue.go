package structs

import "fmt"

// Queue queue being created
type Queue struct {
	data []int
}

// Enqueue an item
func (q *Queue) Enqueue(item int) {
	q.data = append(q.data, item)
}

// IsEmpty check if the queue is empty
func (q Queue) IsEmpty() bool {
	return len(q.data) == 0
}

// Dequeue an item
func (q *Queue) Dequeue() int {
	if q.IsEmpty() {
		return -1
	}
	val := q.data[0]
	q.data = q.data[1:]
	return val
}

// Print the queue
func (q Queue) Print() {
	for i := 0; i < len(q.data); i++ {
		fmt.Printf("%d ", q.data[i])
	}
}

// Clear the queue
func (q *Queue) Clear() {
	q.data = q.data[:0]
}
