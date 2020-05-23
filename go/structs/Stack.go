package structs

import "fmt"

// Stack stack structure
type Stack struct {
	data []int
}

// Push push an item to the stack
func (s *Stack) Push(item int) {
	if len(s.data) == 0 {
		// s.data = make([]int, 0, 10)
		s.data[0] = item
	} else {
		for i := 1; i < len(s.data)-1; i++ {
			s.data[i+1] = s.data[i]
		}
		s.data[0] = item
	}
}

// Pop pop the top item from the stack
func (s *Stack) Pop() int {
	popped := s.data[0]
	s.data = s.data[1:]
	return popped
}

// Print print the stack
func (s Stack) Print() {
	for i := 0; i < len(s.data); i++ {
		fmt.Printf("%d ", s.data[i])
	}
}
