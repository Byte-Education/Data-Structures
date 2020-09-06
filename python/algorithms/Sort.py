def bubblesort(arr):
    for i in range(len(arr) - 1):
        for j in range(i, len(arr)):
            if(arr[i] > arr[j]):
                arr[i], arr[j] = arr[j], arr[i]


def insertionsort(arr):
    for i in range(1, len(arr)):
        j = i - 1
        temp = arr[i]
        while (j >= 0 and temp < arr[j]):
            arr[j + 1] = arr[j]
            j -= 1
        arr[j + 1] = temp
