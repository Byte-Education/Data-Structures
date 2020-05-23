class Queue:
  def __init__(self):
    self.queue = []
    self.size = 0
  def enqueue(self, e):
    self.queue[self.size] = e
    self.size += 1
  def dequeue(self, e):
    temp = self.queue[0]
    for i in range(self.size - 1):
      self.queue[i] = self.queue[i + 1]
    self.size -= 1