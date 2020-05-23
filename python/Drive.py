from structs.LinkedList import *
def main():
  l = LinkedList()
  l.add("Hello")
  l.add("World")
  l.add("This")
  l.add("is")
  l.add("a")
  l.add("linked")
  l.add("list")
  print(l)

  print(l.contains("is"))

  print(l.contains("no"))

  print(f"Size is {l.size()} elements long")

  print(f"The element at index 0 is \"{l.get(0)}\"")
  print(f"The element at index 3 is \"{l.get(3)}\"")


# main()

def testRemoval():
  a = LinkedList()
  a.add("Hello")
  a.remove(0)
  print("Removal of head without others successful" if a.isEmpty() else "Failed removal of head without others")

  b = LinkedList()
  b.add("Hello")
  b.add("World")
  b.remove(0)
  # print(b)
  print("Removal of head with next successful" if b.size() == 1 else "Failed removal of head without next")
  
  c = LinkedList()
  c.add("Hello")
  c.add("Bye")
  c.add("World")
  c.remove(1)

  print("Removal of middle successful" if b.size() == 2 else "Failed removal of middle")

  d = LinkedList()
  d.add("Hello")
  d.add("World")
  d.clear()
  print("Clear successful" if d.isEmpty() else "Clear failed")


testRemoval()