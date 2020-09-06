class Node:
    def __init__(self, data):
        self.data = data
        self.left = None
        self.right = None

    def getLeft(self):
        return self.left

    def getData(self):
        return self.data

    def getRight(self):
        return self.right

    def setLeft(self, left):
        self.left = left

    def setData(self, data):
        self.data = data

    def setRight(self, right):
        self.right = right

    def __gt__(self, o):
        return self.data > o

    def __lt__(self, o):
        return self.data < o

    def __eq__(self, o):
        return self.data == o

    def __str__(self):
        return f"{self.data}"


class BST:
    def __init__(self):
        self.root = None
        self.count = 0

    # Normally recursive with two function headings, but python doesn't allow that lol, so, we'll make do with one
    def insert(self, data, root=None):
        if(root is None and self.root is None):
            print(f"{data} inserted at root")
            self.root = Node(data)
            self.count += 1
            return
        else:
            if(root is None):
                return self.insert(data, self.root)
            else:
                if(root < data):
                    if(root.getRight() is None):
                        print(f"{data} inserted to the right of {root}")
                        root.setRight(Node(data))
                        self.count += 1
                        return
                    else:
                        return self.insert(data, root.getRight())
                elif(root > data):
                    if(root.getLeft() is None):
                        print(f"{data} inserted to the left of {root}")
                        root.setLeft(Node(data))
                        self.count += 1
                        return
                    else:
                        return self.insert(data, root.getLeft())

    def getLength(self):
        return self.count

    def __len__(self):
        return self.count

    def find(self, data, root=None):
        if(self.root is None):
            return False
        if(root is None):
            return self.find(data, self.root)
        else:
            if(root == data):
                return True
            elif(root < data):
                if(root.getRight() is None):
                    return False
                else:
                    return self.find(data, root.getRight())
            else:
                if(root.getLeft() is None):
                    return False
                else:
                    return self.find(data, root.getLeft())

    def isDegenerate(self, root=None):
        if(self.root is None):
            return False
        else:
            if(root is None):
                return self.isDegenerate(self.root)
            else:
                if(root.getLeft() is not None):
                    if(root.getRight() is not None):
                        return False
                    else:
                        return self.isDegenerate(root.getLeft())
                else:
                    if(root.getRight() is not None):
                        return self.isDegenerate(root.getRight())
        return True
