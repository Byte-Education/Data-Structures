class LinkedNode<T> {
  private next: LinkedNode<T>;
  private data: T;

  constructor(data: T){
    this.data = data;
    this.next = null;
  }

  public getData(): T {
    return this.data;
  }

  public setData(data: T): void {
    this.data = data;
  }

  public getNext(): LinkedNode<T> {
    return this.next;
  }

  public setNext(next: LinkedNode<T>): void {
    this.next = next;
  }

}

export class LinkedList<T> {
  private head: LinkedNode<T>;

  constructor(){
    this.head = null;
  }

  public add(data: T): void {
    if(this.head == null){
      this.head = new LinkedNode<T>(data);
    } else {
      var temp = this.head;
      while(temp.getNext() != null){
        temp = temp.getNext();
      }
      temp.setNext(new LinkedNode<T>(data));
    }
  }

  public isEmpty(): boolean {
    return this.head == null;
  }

  public size(): number {
    var temp = this.head;
    var count = 0;
    while(temp != null){
      count++;
      temp = temp.getNext();
    }
    return count;
  }

  public get(index: number): any {
    if(index > this.size()-1 || index < 0 || this.isEmpty()){
      throw "index out of bounds";
    }
    if(index == 0){
      return this.head.getData();
    }
    var temp = this.head;
    var count = 0;
    while(temp.getNext() != null && count != index){
      temp =temp.getNext();
      count++;
    }
    if(count == index){
      return temp.getData();
    }
    return -1;
  }

  public contains(data: T): boolean {
    if(this.isEmpty()){
      return false;
    }
    if(this.head.getData() == data){
      return true;
    }
    var temp = this.head;
    while(temp != null){
      if(temp.getData() == data){
        return true;
      }
      temp = temp.getNext();
    }
    return false;
  }

  public remove(index: number): any {
    if(index > this.size() - 1 || index < 0 || this.isEmpty()){
      throw "Index out of bounds";
    }
    if(index == 0){
      var temp = this.head;
      if(this.head.getNext() != null){
        this.head = null;
        this.head = temp.getNext();
      } else {
        this.head = null;
      }
      return temp;
    }
    var temp = this.head;
    var count = 0;
    while(temp.getNext().getNext() != null && count + 1 != index){
      count++;
      temp = temp.getNext();
    }
    var next = temp.getNext();
    temp.setNext(null);
    temp.setNext(next.getNext());
    return temp;
  }

  public toString(): string {
    if(this.head == null){
      return "Empty";
    } 
    var str = "";
    var temp = this.head;
    while(temp != null){
      str += temp.getData();
      temp = temp.getNext();
      str += " ";
    }
    return str;
  }
}

