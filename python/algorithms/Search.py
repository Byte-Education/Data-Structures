def sequentialsearch(arr, element):
    for i in range(len(arr)):
        if(arr[i] == element):
            return i
    return -1


def binarysearch(arr, element, low, high):
    if(low + 1 == high):
        return -1
    else:
        mid = (low + high) // 2
        if(arr[mid] > element):
            return binarysearch(arr, element, low, mid)
        elif(arr[mid] < element):
            return binarysearch(arr, element, mid, high)
        else:
            return mid
