class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

    def setNext(self, next):
        self.next = next

    def getNext(self):
        return self.next

    def setData(self, data):
        self.data = data

    def getData(self):
        return self.data

    def __str__(self):
      return self.data

class LinkedList:
    def __init__(self):
      self.head = None

    def __str__(self):
      if(self.isEmpty()):
        return "Empty"
      else:
        s = ""
        temp = self.head
        s += temp.getData()
        while(temp.getNext() != None):
          s += ", "
          temp = temp.getNext()
          s += temp.getData()
        return s
    
    def isEmpty(self):
      return self.head == None

    def add(self, element):
      if(self.head == None):
        self.head = Node(element)
      else:
        temp = self.head
        while(temp.getNext() != None):
          temp = temp.getNext()
        temp.setNext(Node(element))
    
    def contains(self, element):
      if(self.isEmpty()):
        return False
      if(self.head == element):
        return True
      temp = self.head
      while(temp.getNext() != None):
        if(temp.getData() == element):
          return True
        temp = temp.getNext()
      return False
    
    def size(self):
      count = 0
      temp = self.head
      while(temp != None):
        count += 1
        temp = temp.getNext()
      return count

    def get(self, index):
      if(index > self.size() or index < 0 or self.isEmpty()):
        raise IndexError
      if(index == 0):
        return self.head.getData()
      else:
        temp = self.head
        count = 0
        while(count != index and temp.getNext() != None):
          count += 1
          temp = temp.getNext()
        return temp.getData()
    
    def remove(self, index):
      if(index > self.size() or index < 0 or self.isEmpty()):
        raise IndexError
      if(index == 0):
        if(self.head.getNext() == None):
          temp = self.head
          self.head = None
          return temp.getData()
        else:
          temp = self.head
          self.head = None
          self.head = temp.getNext()
          return temp.getData()
      else:
        count = 0
        temp = self.head
        while(count + 1 != index and temp.getNext().getNext() != None):
          temp = temp.getNext()
          count += 1
        next = temp.getNext()
        temp.setNext(None)
        temp.setNext(next.getNext())
        return next.getData()

    def clear(self):
      while(not self.isEmpty()):
        self.remove(self.size() - 1)
          


