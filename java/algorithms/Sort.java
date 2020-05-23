package algorithms;

public class Sort extends Algorithms {

  private static void swap(Integer[] arr, int i, int j){
    int temp = arr[i];
    arr[i] = arr[j];
    arr[j] = temp;
  }
  public static void selectionSort(Integer[] arr){
   for(int i=0; i<arr.length; i++){
     for(int j=i; j<arr.length; j++){
       if(arr[i] > arr[j]){
         swap(arr, i, j);
       }
     }
   }
  }
  
  public static void bubbleSort(Integer[] arr){
    for(int i=0; i<arr.length; i++){
      for(int j=0; j<arr.length - i - 1; j++){
        if(arr[j] > arr[j + 1]){
          swap(arr, j, j+ 1);
        }
      }
    }
  }
  public static void insertionSort(Integer[] arr){
    for(int i=0; i<arr.length; i++){
      Integer val = arr[i];
      int j = i - 1;
      while(j >= 0 && arr[j] > val){
        arr[j + 1] = arr[j];
        j -= 1;
      }
      arr[j + 1] = val;
    }
  }
  

  public static void quickSort(Integer[] arr){

  }


  public static void mergeSort(Integer[] arr){

  }
}