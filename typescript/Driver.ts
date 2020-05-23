import { LinkedList } from './structs/LinkedList';

const main = () => {

  var ll = new LinkedList();
  ll.add("Hello");
  ll.add("World");
  ll.add("Edward");
  ll.remove(1);
  console.log(ll.toString());

}

main();