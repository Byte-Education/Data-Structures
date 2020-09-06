class Set:
    def __init__(self):
        self.arr = []
        self.size = 0

    def contains(self, e):
        for el in self.arr:
            if(el == e):
                return True
        return False

    def add(self, e):
        if(self.contains(e)):
            return False
        self.arr.append(e)
        self.size += 1

    def remove(self, index):
        if(index > self.size or index < 0 or self.size == 0):
            raise IndexError
        temp = self.arr[index]
        for i in range(index, self.size - 1):
            arr[i] = self.arr[i + 1]
        self.size -= 1
        return temp

    def get(self, index):
        if(index > self.size or index < 0 or size == 0):
            raise IndexError
        return self.arr[index]
    
    def __len__(self):
      return len(self.arr)
