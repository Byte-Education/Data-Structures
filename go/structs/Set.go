package structs

import "fmt"

// Set set
type Set struct {
	data []int
}

// Contains check if an element is contained in the set
func (s Set) Contains(val int) bool {
	for i := 0; i < len(s.data); i++ {
		if s.data[i] == val {
			return true
		}
	}
	return false
}

// Add add a value to the set if it doesn't already exist
func (s *Set) Add(val int) bool {
	if s.Contains(val) {
		return false
	}
	s.data = append(s.data, val)
	return true
}

// Print the set
func (s *Set) Print() {
	for i := 0; i < len(s.data); i++ {
		fmt.Printf("%d ", s.data[i])
	}
}
