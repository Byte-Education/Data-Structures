package main

import (
	"fmt"

	structs "./structs"
)

func testLinkedList() {
	var ll *structs.LinkedList = new(structs.LinkedList)
	ll.Add("Hello")
	ll.Add("World")
	fmt.Println(ll.Size())
	if ll.Contains("World") {
		fmt.Println("World inside of the Linked List!")
	} else {
		fmt.Println("World not inside of the Linked List")
	}
	g, e := ll.Get(1)
	if e != nil {
		fmt.Println(e)
	} else {
		fmt.Println(g)
	}
	r, e2 := ll.Remove(1)
	if e2 != nil {
		fmt.Println(e2)
	} else {
		fmt.Println(r)
	}

	fmt.Println(ll.Size())
}

func testSet() {
	var s *structs.Set = new(structs.Set)
	s.Add(1)
	s.Add(2)
	s.Add(1)
	s.Add(1)
	s.Add(3)

	s.Print()
}

func testQueue() {
	var q *structs.Queue = new(structs.Queue)
	q.Enqueue(1)
	q.Enqueue(2)

	q.Print()

	fmt.Println()

	q.Dequeue()

	q.Print()
}

func testStack() {
	var s *structs.Stack = new(structs.Stack)
	s.Push(1)
	s.Push(2)
	s.Push(3)
	s.Print()

	fmt.Println()

	fmt.Printf("Popped: %d\n", s.Pop())

	s.Print()

}

func main() {
	// testLinkedList()
	// testSet()
	// testQueue()
	testStack()
}
