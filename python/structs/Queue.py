class Queue:
    def __init__(self):
        self.queue = []
        self.size = 0

    def enqueue(self, e):
        self.queue.append(e)
        self.size += 1

    def dequeue(self):
        temp = self.queue[0]
        for i in range(self.size - 1):
            self.queue[i] = self.queue[i + 1]
        self.size -= 1
        del self.queue[-1]

    def __str__(self):
        return self.queue.__str__()

    def __len__(self):
        return len(self.queue)


q = Queue()
q.enqueue(1)
q.enqueue(2)
q.enqueue(3)

print(q)

q.dequeue()

print(q)
