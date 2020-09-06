class Stack:
    def __init__(self):
        self.stack = []
        self.size = 0

    def push(self, e):
        self.size += 1
        self.stack.append(9)
        for i in range(self.size - 1, 0, -1):
            self.stack[i] = self.stack[i - 1]
        self.stack[0] = e

    def pop(self):
        temp = self.stack[0]
        self.stack.pop(0)
        self.size -= 1
        return temp
        # for i in range(self.size - 1):
        #     self.stack[i] = self.stack[i + 1]
        # del self.stack[self.size - 1]
        # self.size -= 1

    def __str__(self):
        return self.stack.__str__()

    def __len__(self):
        return len(self.stack)


def test():
    s = Stack()
    s.push(1)
    s.push(2)
    s.push(3)
    print(f"Length: {len(s)}\nValues: {s}\n")
    print(f"Popped: {s.pop()}\n")
    print(f"Length: {len(s)}\nValues: {s}\n")

test()