class Stack:
  def __init__(self):
    self.stack = []
    self.size = 0
  def push(self, e):
    size += 1
    for i in range(size, 1, -1):
      arr[i] = arr[i - 1]
    arr[0] = e
  def pop(self):
    temp = self.stack[0]
    for i in range(self.size - 1):
      self.stack[i] = self.stack[i + 1]
    self.size -= 1