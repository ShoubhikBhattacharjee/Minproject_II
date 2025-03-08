<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: LOGIN/login.html"); // Redirect to login if no session
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Two Variables Using a Third Variable</title>
    <link rel="stylesheet" href="../../CSS/Theory.css">
</head>
<body>

    <div class="sidebar">
        <h2>Variable Concepts</h2>
        <ul class="menu">
          
          <li class="menu-item" onclick="location.href='../Algorithms/swap_two_numbers.html'">📜Algorithm</li>
          <li class="menu-item" onclick="location.href='../Flowcharts/swap_two_numbers.html'"><img src="../../Images/flow.jpeg" class="emoji-size" alt = "Flowchart"> Flowchart
          </li>
          <li class="menu-item" onclick="location.href='../basics_of_var.php'">🖥️Simulation</li>
          <li class="menu-item" onclick="location.href='../Quiz/swap_num_quiz.html'">🧠Quiz</li>
          <li class="menu-item" onclick="location.href='../../Code/newindex.html'">⚙️Code & Learn</li>
        </ul>
      </div>

<div class="container">
    <h2>Swapping Two Variables Using a Third Variable</h2>
    
    <h3>1. Introduction</h3>
    <p>Swapping refers to the process of exchanging the values of two variables. It is widely used in programming, especially in sorting algorithms, data manipulation, and problem-solving scenarios.</p>

    <h3>2. Why Do We Need Swapping?</h3>
    <p>Swapping variables is necessary in several programming tasks such as:</p>
    <ul>
        <li>✔ Sorting algorithms like Bubble Sort and Selection Sort.</li>
        <li>✔ Swapping values dynamically in a program.</li>
        <li>✔ Exchanging values in arrays or linked lists.</li>
        <li>✔ Implementing logic where two values need to be interchanged.</li>
    </ul>

    <h3>3. Concept of Swapping Using a Third Variable</h3>
    <p>In this method, a temporary variable is used to store one of the values while swapping. The process follows these steps:</p>
    <table>
        <tr>
            <th>Step</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td><strong>Step 1</strong></td>
            <td>Store the value of the first variable in a temporary variable.</td>
        </tr>
        <tr>
            <td><strong>Step 2</strong></td>
            <td>Assign the value of the second variable to the first variable.</td>
        </tr>
        <tr>
            <td><strong>Step 3</strong></td>
            <td>Assign the stored value from the temporary variable to the second variable.</td>
        </tr>
    </table>

    <h3>4. Example</h3>
    <p>Consider two variables <strong>a</strong> and <strong>b</strong> with initial values 5 and 10. After swapping, <strong>a</strong> should contain 10, and <strong>b</strong> should contain 5.</p>
    <table>
        <tr>
            <th>Before Swapping</th>
            <th>After Swapping</th>
        </tr>
        <tr>
            <td>a = 5, b = 10</td>
            <td>a = 10, b = 5</td>
        </tr>
    </table>

    <h3>5. Advantages of Using a Third Variable</h3>
    <ul>
        <li>✔ Simple and easy to understand.</li>
        <li>✔ Prevents data loss.</li>
        <li>✔ Commonly used in many real-world applications.</li>
    </ul>

    <h3>6. Conclusion</h3>
    <p>Swapping two variables using a temporary variable is a basic but essential operation in programming. While this method requires extra memory, it is a reliable way to exchange values without errors. In cases where memory optimization is needed, other methods like swapping without a third variable (using arithmetic operations) can be considered.</p>

</div>

</body>
</html>
