class Set:
    def __init__(self):
        self.arr = []
        self.size = 0

    def contains(self, e):
        for el in arr:
            if(el == e):
                return True
        return False

    def add(self, e):
        if(contains(e)):
            return False
        self.list.append(e)
        size += 1

    def remove(self, index):
        if(index > self.size or index < 0 or self.size == 0):
            raise IndexError
        temp = self.list[index]
        for i in range(index, self.size - 1):
            arr[i] = arr[i + 1]
        size -= 1
        return temp

    def get(self, index):
        if(index > self.size or index < 0 or size == 0):
            raise IndexError
        return self.list[index]
