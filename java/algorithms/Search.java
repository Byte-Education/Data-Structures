package algorithms;

public class Search {
  public static int linearSearch(Object[] arr, Object obj){
    for(int i=0; i<arr.length; i++){
      if(arr[i].equals(obj)){
        return i;
      }
    }
    return -1;
  }
  public static int binarySearch(int[] arr, int val){
    return binarySearch(arr, val, 0, arr.length);
  }
  public static int binarySearch(int[] arr, int val, int low, int high){
    int mid = (low + high) / 2;
    if(low > high){
      return -1;
    }
    if(arr[mid] > val){
      return binarySearch(arr, val, mid, high);
    } else if(arr[mid] < val){
      return binarySearch(arr, val, low, mid + 1);
    }
    return mid;
  }


}