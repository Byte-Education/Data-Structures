class ArrayList:
  def __init__(self):
    self.list = []
    self.size = 0
  def add(self, e):
    self.list[self.size] = e
    self.size += 1
  def contains(self, e):
    for el in self.list:
      if(el == e):
        return True
    return False
  def clear(self):
    self.list = []
    self.size = 0
  def remove(self, index):
    if(index < 0 or self.size == 0 or index > self.size):
      raise IndexError
    temp = self.list[index]
    for i in range(index, len(list) - 1):
      self.list[i] = self.list[i + 1]
    self.size -= 1
    return temp
  def get(self, index):
    if(index < 0 or size == 0 or index > self.size):
      raise IndexError
    return self.list[index]
  