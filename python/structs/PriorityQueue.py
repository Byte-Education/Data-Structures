class QueueNode:
  def __init__(self, value, priority):
    self.value = value
    self.priority = priority
  def __lt__(self, o):
    return self.priority < o.priority
  def __gt__(self, o):
    return self.priority > o.priority
  def __eq__(self, o):
    return self.priority == o.priority
  def __str__(self):
    return str(self.value)
  def __repr__(self):
    return str(self.value)
class PriorityQueue:
  def __init__(self):
    self.queue = []
  def __str__(self): 
    return ' '.join([str(i) for i in self.queue]) 
  def isEmpty(self):
    return len(self.queue) == 0
  def insert(self, data = QueueNode):
    self.queue.append(data)
    self.queue.sort(reverse=True)
  def delete(self):
    try: 
      max = 0
      for i in range(len(self.queue)): 
          if self.queue[i] > self.queue[max]: 
              max = i 
      item = self.queue[max] 
      del self.queue[max] 
      return item 
    except IndexError: 
      print() 
      exit() 
  def printQueue(self):
    for i in range(len(self.queue)):
      print(self.queue[i])

if __name__ == '__main__':
  q = PriorityQueue()
  q.insert(QueueNode("hello", 1))
  q.insert(QueueNode("Edward", 5))
  q.insert(QueueNode("world", 2))
  q.insert(QueueNode("John", 10))
  print(q)
  while not q.isEmpty(): 
    print(q.delete())  