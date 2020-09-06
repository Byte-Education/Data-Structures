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
        return f"Priority: {self.priority}, Value: {self.value}"

    def __repr__(self):
        return __str__()


# Pulled from : https://www.geeksforgeeks.org/priority-queue-in-python/
class PriorityQueue:
    def __init__(self):
        self.queue = []

    def __str__(self):
        return ' '.join([str(i) for i in self.queue])

    def isEmpty(self):
        return len(self.queue) == 0

    def insert(self, key, value):
        data = QueueNode(key, value)
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
            print("Index Error")
            return


    def __len__(self):
        return len(self.queue)

