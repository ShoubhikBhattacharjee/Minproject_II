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
    <title>Linear Search in C</title>
    <link rel="stylesheet" href="../../CSS/Theory.css">
</head>
<body>
    <div class="sidebar">
        <h2>Linear Search Concept</h2>
        <ul class="menu">
            
            <li class="menu-item" onclick="location.href='../Algorithms/linear_search.php'">📜Algorithm</li>
            <li class="menu-item" onclick="location.href='../Flowcharts/linear_search.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt = "Flowchart"> Flowchart
            </li>
            <li class="menu-item" onclick="location.href='../Simulations/linear_search.php'">🖥️Simulation</li>
            <li class="menu-item" onclick="location.href='../Quiz/linear_quiz.php'">🧠Quiz</li>
            <li class="menu-item" onclick="location.href='../../Code/newindex.html'">⚙️Code & Learn</li>
        </ul>
    </div>

    <div class="container">
        <h2>Linear Search in C</h2>
        
        <h3>1. Introduction</h3>
        <p>Linear search is a simple searching algorithm that sequentially checks each element of an array until the desired value is found or the list ends.</p>

        <h3>2. Why Do We Need Linear Search?</h3>
        <ul>
            <li>✔ The dataset is small and unordered.</li>
            <li>✔ No complex search algorithms are required.</li>
            <li>✔ The array is unsorted or dynamically changing.</li>
            <li>✔ Ease of implementation is more important than efficiency.</li>
        </ul>

        <h3>3. Concept of Linear Search</h3>
        <p>Linear search works by checking each element in the array one by one until a match is found or the end of the array is reached.</p>
        <table>
            <tr>
                <th>Step</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td><strong>Step 1</strong></td>
                <td>Start from the first element of the array.</td>
            </tr>
            <tr>
                <td><strong>Step 2</strong></td>
                <td>Compare the current element with the target value.</td>
            </tr>
            <tr>
                <td><strong>Step 3</strong></td>
                <td>If a match is found, return the index of the element.</td>
            </tr>
            <tr>
                <td><strong>Step 4</strong></td>
                <td>If the end of the array is reached and no match is found, return -1.</td>
            </tr>
        </table>

        <h3>4. Example</h3>
        <p>Consider an array <strong>[10, 25, 30, 45, 50]</strong> and we need to search for <strong>30</strong>.</p>
        <table>
            <tr>
                <th>Index</th>
                <th>Element</th>
                <th>Comparison with 30</th>
            </tr>
            <tr>
                <td>0</td>
                <td>10</td>
                <td>Not Found</td>
            </tr>
            <tr>
                <td>1</td>
                <td>25</td>
                <td>Not Found</td>
            </tr>
            <tr>
                <td>2</td>
                <td>30</td>
                <td><strong>Found at Index 2</strong></td>
            </tr>
        </table>

        <h3>5. Advantages of Linear Search</h3>
        <ul>
            <li>✔ Simple and easy to understand.</li>
            <li>✔ Can be used on unsorted data.</li>
            <li>✔ Works on any data structure (arrays, linked lists, etc.).</li>
        </ul>

        <h3>6. Conclusion</h3>
        <p>Linear search is a basic and straightforward search algorithm that is useful for small datasets. However, for large datasets, more efficient search algorithms like binary search are preferred due to their faster performance.</p>
    </div>
</body>
</html>
