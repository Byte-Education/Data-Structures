package structs

import (
	"errors"
)

// Node structure
type Node struct {
	data string
	next *Node
}

// LinkedList structure
type LinkedList struct {
	head *Node
}

// Add add to linked list
func (ll *LinkedList) Add(data string) {
	n := &Node{data: data, next: nil}
	if ll.head == nil {
		ll.head = n
	} else {
		temp := ll.head
		for temp.next != nil {
			temp = temp.next
		}
		temp.next = n
	}
}

// Size get size of linked list
func (ll LinkedList) Size() int {
	if ll.head == nil {
		return 0
	}
	count := 1
	temp := ll.head
	for temp.next != nil {
		count++
		temp = temp.next
	}
	return count
}

// Contains check if value is contained
func (ll LinkedList) Contains(data string) bool {
	if ll.head.data == data {
		return true
	}
	temp := ll.head
	for temp != nil {
		if temp.data == data {
			return true
		}
		temp = temp.next
	}
	return false
}

// IsEmpty Check if is empty of not
func (ll LinkedList) IsEmpty() bool {
	return ll.head == nil
}

// Get an element
func (ll LinkedList) Get(index int) (string, error) {
	if index > ll.Size()-1 || index < 0 || ll.IsEmpty() {
		return "", errors.New("out of bounds")
	}
	if index == 0 {
		return ll.head.data, nil
	}
	temp := ll.head
	count := 0
	for temp != nil {
		if count == index {
			return temp.data, nil
		}
		temp = temp.next
		count++
	}
	return "none", nil
}

// Remove an element
func (ll LinkedList) Remove(index int) (string, error) {
	if index > ll.Size()-1 || index < 0 || ll.IsEmpty() {
		return "", errors.New("out of bounds")
	}
	if index == 0 {
		temp := ll.head
		if ll.head.next != nil {
			ll.head = nil
			ll.head = temp.next
		} else {
			ll.head = nil
		}
		return temp.data, nil
	}
	temp := ll.head
	count := 0
	for temp != nil {
		if count+1 == index {
			next := temp.next
			temp.next = nil
			temp.next = next.next
			return next.data, nil
		}
		count++
		temp = temp.next
	}
	return "not found", nil
}
