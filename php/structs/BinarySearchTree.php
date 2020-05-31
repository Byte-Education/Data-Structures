<?php
class BSTNode
{
    private $data;
    private $left;
    private $right;

    public function __construct($data)
    {
        $this -> data = $data;
        $this -> left = null;
        $this -> right = null;
    }

    public function setLeft(BSTNode $left)
    {
        $this -> left = $left;
    }

    public function setRight(BSTNode $right)
    {
        $this -> right = $right;
    }

    public function setData($data)
    {
        $this -> data = $data;
    }

    public function getLeft() : BSTNode
    {
        return $this -> left;
    }

    public function getRight() : BSTNode
    {
        return $this -> right;
    }

    public function getData()
    {
        return $this -> data;
    }
}

class BinarySearchTree
{
    private $root;

    public function __construct()
    {
        $this -> root = null;
    }

    public function add($data, BSTNode $head = null)
    {
        if ($head == null) {
            $head = $this -> root;
        }
        if ($head == null) {
            $head = new BSTNode($data);
            return;
        }
        if ($head -> getData() < $data) {
            if ($head -> getLeft() == null) {
                $head -> setLeft(new BSTNode($data));
                return;
            } else {
                if ($head -> getLeft() -> getData() < $data) {
                    add($data, $head -> getLeft());
                }
            }
        } elseif ($head -> getData() > $data) {
            if ($head -> getRight() == null) {
                $head -> setRight(new BSTNode($data));
                return;
            } else {
                if ($head -> getRight() -> getData() > $data) {
                    add($data, $head -> getRight());
                }
            }
        }
    }

    public function find($item, BSTNode $node = null)
    {
        if ($node == null) {
            if ($this -> root == null) {
                return false;
            }
            $node = $this -> root;
        }
        if ($node -> getData() == $item) {
            return true;
        } elseif ($node -> getData() > $item) {
            return find($item, $node -> getRight());
        }
        return find($item, $node -> getLeft());
    }
}
