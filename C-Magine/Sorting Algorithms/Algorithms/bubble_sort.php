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
  <title>Bubble Sort Algorithm</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../CSS/Algorithms.css" />
</head>

<body>
  <div class="sidebar">
    <h2>Bubble Sort Concept</h2>
    <ul class="menu">
      <li
        class="menu-item"
        onclick="location.href='../Theory/bubble_theory.php'">
        📖Theory
      </li>
      <li class="menu-item" onclick="location.href='../Flowcharts/bubble_sort.php'">
        <img
          src="../../Images/flow.jpeg"
          class="emoji-size"
          alt="Flowchart" />
        Flowchart
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Simulations/bubble_sort.php'">
        🖥️Simulation
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Quiz/bubble_quiz.php'">
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
      <h1>Bubble Sort Algorithm</h1>
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
          int array[100], size;
        </dd>
        <dt>Step 4:</dt>
        <dd>Accept size ‘size’ of the array ‘array’ from the user.</dd>
        <dt>Step 5:</dt>
        <dd>Accept ‘size’ array elements from the user and store them in ‘array’.</dd>
        <dt>Step 6:</dt>
        <dd>Call function ‘bubbleSort(array, size)’.</dd>
        <dt>Step 7:</dt>
        <dd>Store ‘array’, ‘size’ as formal parameters ‘array[]’, ‘size’.</dd>
        <dt>Step 8:</dt>
        <dd>
          Declare variable – <br>
          int i;
        </dd>
        <dt>Step 9:</dt>
        <dd>Set i = 0.</dd>
        <dt>Step 10:</dt>
        <dd>
          If i < size - 1, proceed to step 11. <br>
          Else, go to step 23.
        </dd>
        <dt>Step 11:</dt>
        <dd>
          Declare variable – <br>
          int j;</dd>
        <dt>Step 12:</dt>
        <dd>Set j = 0.</dd>
        <dt>Step 13:</dt>
        <dd>
          If j < size - 1 - i, proceed to step 14. <br />
          Else, go to step 21.
        </dd>
        <dt>Step 14:</dt>
        <dd>
          If found array[j] > array[j + 1], proceed to step 15. <br />
          Else, go to step 19.
      </dd>
        <dt>Step 15:</dt>
        <dd>
          Declare variable – <br>
          int temp;
        </dd>
        <dt>Step 16:</dt>
        <dd>Set temp = array[j].</dd>
        <dt>Step 17:</dt>
        <dd>Set array[j] = array[j + 1].</dd>
        <dt>Step 18:</dt>
        <dd>Set array[j + 1] = temp.</dd>
        <dt>Step 19:</dt>
        <dd>Increment ‘j’ by 1.</dd>
        <dt>Step 20:</dt>
        <dd>Go to step 13.</dd>
        <dt>Step 21:</dt>
        <dd>Increment ‘i’ by 1.</dd>
        <dt>Step 22:</dt>
        <dd>Go to step 10.</dd>
        <dt>Step 23:</dt>
        <dd>Return to ‘main’ function.</dd>
        <dt>Step 24:</dt>
        <dd>Display the sorted array. </dd>
        <dt>Step 25:</dt>
        <dd>End the program.</dd>
      </dl>
    </div>
  </div>
</body>

</html>