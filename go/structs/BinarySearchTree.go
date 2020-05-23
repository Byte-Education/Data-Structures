package structs

// BSTNode Binary Search Tree node
type BSTNode struct {
	data  string
	left  *BSTNode
	right *BSTNode
}

// BinarySearchTree binary search tree structure
type BinarySearchTree struct {
	root *BSTNode
}

// Add add a node to the bst
func (bst BinarySearchTree) Add(data string) {
	node := &BSTNode{data: data, left: nil, right: nil}
	if bst.root == nil {
		bst.root = node
	} else {
		if bst.root.data > data {
			if bst.root.left == nil {
				bst.root.left = node
			} else {

			}
		}
	}
}
