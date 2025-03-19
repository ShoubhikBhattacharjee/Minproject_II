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
    <title>Bubble Sort Concepts</title>
    <link rel="stylesheet" href="../../CSS/Theory.css">
</head>
<body>
    <div class="sidebar">
        <h2>Bubble Sort in C</h2>
        <ul class="menu">
        <li class="menu-item" onclick="location.href='../Algorithms/bubble_sort.php'">📜Algorithm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="menu-item" onclick="location.href='../Flowcharts/bubble_sort.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt="Flowchart"> Flowchart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li class="menu-item" onclick="location.href='../Simulations/bubble_sort.php'">🖥️Simulation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="menu-item" onclick="location.href='../Quiz/bubble_quiz.php'">🧠Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="menu-item" onclick="window.open('../../Code/newindex.html', '_blank')">⚙️Code & Learn</li>
        </ul>
    </div>

    <div class="container">
        <h2>Bubble Sort in C</h2>
    
        <h3>1. Introduction</h3>
        <p>Bubble Sort is a <b>simple sorting algorithm</b> that works by repeatedly swapping adjacent elements if they are in the wrong order. It is one of the fundamental sorting techniques and is primarily used for educational purposes due to its straightforward implementation.</p>
    
        <h3>2. How Does Bubble Sort Work?</h3>
        <p>Bubble Sort follows these steps:</p>
        <ul>
            <li>✔ Compare adjacent elements.</li>
            <li>✔ Swap them if they are in the wrong order.</li>
            <li>✔ Repeat for each pair in the list.</li>
            <li>✔ The largest element "bubbles up" to its correct position.</li>
            <li>✔ The process repeats until the list is sorted.</li>
        </ul>
    
        <h3>3. Visual Representation</h3>
        <p>Let’s say we have the array <code>[5, 3, 8, 4, 2]</code>. Bubble Sort sorts it as follows:</p>
        <table>
            <tr>
                <th>Pass</th>
                <th>Array State</th>
            </tr>
            <tr>
                <td>1st Pass</td>
                <td>[3, 5, 4, 2, 8]</td>
            </tr>
            <tr>
                <td>2nd Pass</td>
                <td>[3, 4, 2, 5, 8]</td>
            </tr>
            <tr>
                <td>3rd Pass</td>
                <td>[3, 2, 4, 5, 8]</td>
            </tr>
            <tr>
                <td>4th Pass</td>
                <td>[2, 3, 4, 5, 8]</td>
            </tr>
        </table>
    
        <h3>4. Basic Bubble Sort Logic</h3>
        <p>Bubble Sort compares two adjacent elements and swaps them if needed.</p>
        <pre>
    if (arr[j] > arr[j + 1]) {
        int temp = arr[j];
        arr[j] = arr[j + 1];
        arr[j + 1] = temp;
    }
        </pre>
        <p>This ensures that larger elements move towards the end with each pass.</p>
    
        <h3>5. Characteristics of Bubble Sort</h3>
        <ul>
            <li><b>Stable:</b> Preserves the relative order of equal elements.</li>
            <li><b>In-Place:</b> Requires no extra space apart from the input array.</li>
            <li><b>Time Complexity:</b> Worst and average case <code>O(n²)</code>, best case <code>O(n)</code> (already sorted).</li>
            <li><b>Simple:</b> Easy to understand and implement.</li>
        </ul>
    
        <h3>6. Example: Sorting an Array</h3>
        <p>The following snippet sorts an array using Bubble Sort:</p>
        <pre>
    void bubbleSort(int arr[], int n) {
        for (int i = 0; i < n - 1; i++) {
            for (int j = 0; j < n - i - 1; j++) {
                if (arr[j] > arr[j + 1]) {
                    // Swap logic
                }
            }
        }
    }
        </pre>
    
        <h3>7. When to Use Bubble Sort?</h3>
        <ul>
            <li>✔ Suitable for small datasets.</li>
            <li>✔ Best when data is already nearly sorted.</li>
            <li>✔ Useful for teaching sorting concepts.</li>
        </ul>
    
        <h3>8. Conclusion</h3>
        <p>Bubble Sort is an essential algorithm in computer science, offering a straightforward way to understand sorting principles. Though inefficient for large datasets, it is useful for small lists and educational purposes. Learning Bubble Sort helps programmers grasp key concepts such as swapping, iteration, and efficiency, paving the way for understanding more complex sorting algorithms like Quick Sort and Merge Sort.</p>
    </div>    
</body>
</html>
