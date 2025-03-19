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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selection Sort Algorithm</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../CSS/Algorithms.css" />
</head>

<body>
  <div class="sidebar">
    <h2>Selection Sort Concept</h2>
    <ul class="menu">
      <li
        class="menu-item"
        onclick="location.href='../Theory/select_theory.php'">
        📖Theory
      </li>
      <li class="menu-item" onclick="location.href='../Flowcharts/selection_sort.php'">
        <img
          src="../../Images/flow.jpeg"
          class="emoji-size"
          alt="Flowchart" />
        Flowchart
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Simulations/selection_sort.php'">
        🖥️Simulation
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Quiz/select_quiz.php'">
        🧠Quiz
      </li>
      <li
        class="menu-item"
        onclick="window.open('../../Code/newindex.html', '_blank')">
        ⚙️Code & Learn
      </li>
    </ul>
  </div>
  <div class="content-section">
    <div class="container">
      <h1>Selection Sort Algorithm</h1>
      <dl>
        <dt>Step 1:</dt>
        <dd>
          Start the program, including necessary header files and the 'main'
          function.
        </dd>
        <dt>Step 2:</dt>
        <dd>Enter 'main' function.</dd>
        <dt>Step 3:</dt>
        <dd>
          Declare variables - <br />
          int arr[100], n;
        </dd>
        <dt>Step 4:</dt>
        <dd>Accept size ‘n’ of the array ‘arr’ from the user.</dd>
        <dt>Step 5:</dt>
        <dd>Accept ‘n’ array elements from the user and store them in ‘arr’.</dd>
        <dt>Step 6:</dt>
        <dd>Display the original array.</dd>
        <dt>Step 7:</dt>
        <dd>Call function ‘selectionSort(arr, n)’.</dd>
        <dt>Step 8:</dt>
        <dd>Store ‘arr’, ‘n’ as formal aparameters ‘*arr’, ‘n’.</dd>
        <dt>Step 9:</dt>
        <dd>Declare variables – <br>
          int i, j, minIndex, temp;
        </dd>
        <dt>Step 10:</dt>
        <dd>Set i = 0.</dd>
        <dt>Step 11:</dt>
        <dd>If i < n - 1, proceed to step 12. <br>
            Else, go to step 25.
        </dd>
        <dt>Step 12:</dt>
        <dd>Set minIndex = i.</dd>
        <dt>Step 13:</dt>
        <dd>Set j = i + 1.</dd>
        <dt>Step 14:</dt>
        <dd>
          If j < n, proceed to step 15. <br>
            Else, go to step 19.
        </dd>
        <dt>Step 15:</dt>
        <dd>
          If arr[j] < arr[minIndex], proceed to step 16. <br>
            Else, go to step 17.
        </dd>
        <dt>Step 16:</dt>
        <dd>Set minIndex = j.</dd>
        <dt>Step 17:</dt>
        <dd>Increment ‘j’ by 1.</dd>
        <dt>Step 18:</dt>
        <dd>Go to step 14.</dd>
        <dt>Step 19:</dt>
        <dd>
          If minIndex != i, proceed to step 20. <br>
          Else, go to step 23.
        </dd>
        <dt>Step 20:</dt>
        <dd>Set temp = arr[i].</dd>
        <dt>Step 21:</dt>
        <dd>Set arr[i] = arr[minIndex].</dd>
        <dt>Step 22:</dt>
        <dd>Set arr[minIndex] = temp.</dd>
        <dt>Step 23:</dt>
        <dd>Increment ‘i’ by 1.</dd>
        <dt>Step 24:</dt>
        <dd>Go to step 11.</dd>
        <dt>Step 25:</dt>
        <dd>Return to ‘main’ function.</dd>
        <dt>Step 26:</dt>
        <dd>Display the sorted array. </dd>
        <dt>Step 27:</dt>
        <dd>End the program.</dd>
      </dl>
    </div>
  </div>
</body>

</html>