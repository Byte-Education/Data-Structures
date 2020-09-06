from structs.LinkedList import *
from structs.PriorityQueue import *
from structs.BST import *
from util.test import test_equals, test_true, disable_print, test_false, test_no_raise, test_raise

@test_equals(4)
def testLinkedListAdd():
  l = LinkedList()
  l.add('Hello')
  l.add('Hello')
  l.add('Hello')
  l.add('Hello')
  return len(l)

@test_true()
def testLinkedListContains():
  l = LinkedList()
  l.add("hello")
  l.add("world")
  return l.contains("hello")

@test_false()
def testLinkedListNotContains():
  l = LinkedList()
  l.add("hello")
  l.add("world")
  return l.contains("hellos")

@test_equals(10)
def testLinkedListGet():
  l = LinkedList()
  l.add(10)
  l.add(1)
  return l.get(0)

@test_true()
def testClearWithHead():
  a = LinkedList()
  a.add("hello")
  a.remove(0)
  return a.isEmpty()

@test_equals(1)
def testRemovalOfHeadWithOthers():
  b = LinkedList()
  b.add("Hello")
  b.add("World")
  b.remove(0)
  return len(b)

@test_equals(3)
def testRemovalOfMiddle():
  c = LinkedList()
  c.add("Hello")
  c.add("Bye")
  c.add("Cya")
  c.add("World")
  c.remove(1)
  return len(c)


@test_equals(2)
def testRemovalOfLast():
  d = LinkedList()
  d.add("Hello")
  d.add("Bye")
  d.add("World")
  d.remove(2)
  return len(d)

@test_true()
def testClear():
  e = LinkedList()
  e.add("Hello")
  e.add("World")
  e.clear()
  return e.isEmpty()


# testRemoval()

@test_equals(4)
def testPriorityQueueAdd():
  q = PriorityQueue()
  q.insert("hello", 1)
  q.insert("Edward", 5)
  q.insert("world", 2)
  q.insert("John", 10)
  return len(q)


@test_equals(8)
def testBSTAdd():
    b = BST()
    with disable_print():
      b.insert(4)
      b.insert(2)
      b.insert(3)
      b.insert(18)
      b.insert(5)
      b.insert(10)
      b.insert(9)
      b.insert(12)
    return len(b)

@test_true()
def testBSTSearch():
    b = BST()
    with disable_print():
      b.insert(10)
      b.insert(3)
      return b.find(3)

@test_true()
def testBSTDegenerate():
    d = BST()
    with disable_print():
      d.insert(1)
      d.insert(2)
      d.insert(4)
      d.insert(10)
      d.insert(6)
    return d.isDegenerate()

@test_false()
def testBSTNotDegenerate():
    d = BST()
    with disable_print():
      d.insert(1)
      d.insert(2)
      d.insert(4)
      d.insert(10)
      d.insert(3)
    return d.isDegenerate()

@test_no_raise()
def testBSTWithStrings():
  s = BST()
  with disable_print():
    s.insert("h")
    s.insert("i")
    s.insert("a")
    s.insert("l")
  return len(s)

@test_raise(TypeError)
def testBSTMultiType():
  b = BST()
  with disable_print():
    b.insert(1)
  b.insert('a')


def testBST():
  testBSTAdd()
  print()
  testBSTSearch()
  print()
  testBSTDegenerate()
  print()
  testBSTNotDegenerate()
  print()
  testBSTWithStrings()
  print()
  testBSTMultiType()
  print()

testBST()