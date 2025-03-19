<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../LOGIN/login.html"); // Redirect to login if no session
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort in C</title>
    <link rel="stylesheet" href="../../CSS/Theory.css">
</head>

<body>
    <div class="sidebar">
        <h2>Insertion Sort in C</h2>
        <ul class="menu">
            <li class="menu-item" onclick="location.href='../Algorithms/selection_sort.php'">📜Algorithm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="menu-item" onclick="location.href='../Flowcharts/selection_sort.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt="Flowchart"> Flowchart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li class="menu-item" onclick="location.href='../Simulations/selection_sort.php'">🖥️Simulation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="menu-item" onclick="location.href='../Quiz/select_quiz.php'">🧠Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="menu-item" onclick="window.open('../../Code/newindex.html', '_blank')">⚙️Code & Learn</li>
        </ul>
    </div>

    <div class="container">
        <h2>Selection Sort in C</h2>

        <h3>1. Introduction</h3>
        <p>Selection Sort is a <b>simple and intuitive</b> sorting algorithm that repeatedly selects the smallest (or largest) element from the unsorted portion of an array and swaps it with the first unsorted element. It has a time complexity of <code>O(n²)</code> but performs fewer swaps than other <code>O(n²)</code> algorithms like Bubble Sort.</p>

        <h3>2. How Does Selection Sort Work?</h3>
        <p>Selection Sort follows these steps:</p>
        <ul>
            <li>✔ Find the smallest element in the unsorted part of the array.</li>
            <li>✔ Swap it with the first element of the unsorted part.</li>
            <li>✔ Move the boundary of the sorted part one step forward.</li>
            <li>✔ Repeat until the entire array is sorted.</li>
        </ul>

        <h3>3. Visual Representation</h3>
        <p>Consider sorting the array <code>[7, 3, 5, 2]</code> using Selection Sort:</p>
        <table>
            <tr>
                <th>Step</th>
                <th>Array State</th>
                <th>Smallest Element Swapped</th>
            </tr>
            <tr>
                <td>Initial</td>
                <td>[7, 3, 5, 2]</td>
                <td> - </td>
            </tr>
            <tr>
                <td>Step 1</td>
                <td>[2, 3, 5, 7]</td>
                <td>2 swapped with 7</td>
            </tr>
            <tr>
                <td>Step 2</td>
                <td>[2, 3, 5, 7]</td>
                <td>3 remains (already in correct position)</td>
            </tr>
            <tr>
                <td>Step 3</td>
                <td>[2, 3, 5, 7]</td>
                <td>5 remains (already in correct position)</td>
            </tr>
        </table>

        <h3>4. Selection Sort Logic</h3>
        <p>The algorithm repeatedly selects the smallest element and moves it to its correct position:</p>
        <pre>
    void selectionSort(int arr[], int n) {
        for (int i = 0; i < n - 1; i++) {
            int minIndex = i;
    
            for (int j = i + 1; j < n; j++) {
                if (arr[j] < arr[minIndex])
                    minIndex = j; // Find the minimum element
            }
    
            // Swap the found minimum with the first element
            int temp = arr[minIndex];
            arr[minIndex] = arr[i];
            arr[i] = temp;
        }
    }
        </pre>
        <p>Each pass ensures that the smallest element is placed in its correct position.</p>

        <h3>5. Characteristics of Selection Sort</h3>
        <ul>
            <li><b>Simple and Easy to Implement:</b> No extra space required.</li>
            <li><b>Not Stable:</b> Relative order of equal elements may change.</li>
            <li><b>Efficient in Terms of Swaps:</b> Performs fewer swaps than Bubble or Insertion Sort.</li>
            <li><b>Time Complexity:</b>
                <ul>
                    <li>✔ <b>Best Case:</b> <code>O(n²)</code></li>
                    <li>✔ <b>Worst/Average Case:</b> <code>O(n²)</code></li>
                </ul>
            </li>
        </ul>

        <h3>6. Example: Sorting an Array</h3>
        <p>The following snippet sorts an array using Selection Sort:</p>
        <pre>
    #include &lt;stdio.h&gt;
    
    void selectionSort(int arr[], int n) {
        for (int i = 0; i < n - 1; i++) {
            int minIndex = i;
            for (int j = i + 1; j < n; j++) {
                if (arr[j] < arr[minIndex])
                    minIndex = j;
            }
            int temp = arr[minIndex];
            arr[minIndex] = arr[i];
            arr[i] = temp;
        }
    }
    
    int main() {
        int arr[] = {7, 3, 5, 2};
        int n = sizeof(arr) / sizeof(arr[0]);
    
        selectionSort(arr, n);
    
        for (int i = 0; i < n; i++)
            printf("%d ", arr[i]);
    
        return 0;
    }
        </pre>

        <h3>7. When to Use Selection Sort?</h3>
        <ul>
            <li>✔ Best for small datasets where swap operations are costly.</li>
            <li>✔ Useful when memory is limited (in-place sorting).</li>
            <li>✔ Not ideal for large datasets due to <code>O(n²)</code> time complexity.</li>
        </ul>

        <h3>8. Conclusion</h3>
        <p>Selection Sort is an <b>easy-to-understand sorting algorithm</b> that is suitable for small datasets. It minimizes swap operations, making it useful when write operations are expensive. However, its <code>O(n²)</code> complexity makes it inefficient for large datasets. Despite its simplicity, it is less commonly used in real-world applications where more efficient algorithms like Merge Sort or Quick Sort are preferred.</p>
    </div>
</body>

</html>