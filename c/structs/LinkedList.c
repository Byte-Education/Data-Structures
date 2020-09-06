#include <stdio.h>
#include <stdlib.h>

typedef struct node {
  char* value;
  struct node* next;
} node;

node* list;

void setup(int size){
  list = (node*)malloc(size * sizeof(node));
}

// int add(node* e){
//   if(*list == NULL){
//     *list = *e;
//   }
// }˜

int main(){
  setup(10);
  printf("%lu\n", sizeof(*list));
  free(list);
  return 0;
}