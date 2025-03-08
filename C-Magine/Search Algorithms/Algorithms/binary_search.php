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
  <title>Binary Search Algorithm</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../CSS/Algorithms.css" />
</head>

<body>
  <div class="sidebar">
    <h2>Binary Search Concept</h2>
    <ul class="menu">
      <li
        class="menu-item"
        onclick="location.href='../Theory/binary_search_theory.php'">
        📖Theory
      </li>
      <li class="menu-item" onclick="location.href='../Flowcharts/binary_search.php'">
        <img
          src="../../Images/flow.jpeg"
          class="emoji-size"
          alt="Flowchart" />
        Flowchart
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Simulations/binary_search.php'">
        🖥️Simulation
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Quiz/binary_quiz.php'">
        🧠Quiz
      </li>
      <li
        class="menu-item"
        onclick="location.href='../../Code/newindex.html'">
        ⚙️Code & Learn
      </li>
    </ul>
  </div>
  <div class="content-section">
    <div class="container">
      <h1>Binary Search Algorithm</h1>
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
          int arr[100], size, searchValue;
        </dd>
        <dt>Step 4:</dt>
        <dd>Accept size ‘n’ of an array ‘array’ from the user.</dd>
        <dt>Step 5:</dt>
        <dd>
          Accept ‘n’ array elements from the user and store them in ‘array’.
        </dd>
        <dt>Step 6:</dt>
        <dd>
          Accept ‘searchValue’, the value to search for in ‘array’, from the
          user.
        </dd>
        <dt>Step 7:</dt>
        <dd>
          Call function – ‘binarySearch(array, 0, size - 1, searchValue)’.
        </dd>
        <dt>Step 8:</dt>
        <dd>
          Store ‘array’, ‘0’, ‘size – 1’, ‘searchValue’ as formal parameters ‘array[]’, ‘left’, ‘right’, ‘searchValue’.
        </dd>
        <dt>Step 9:</dt>
        <dd>
          If left <= right, then proceed to step 10. <br>
            Else, go to step 19.
        </dd>
        <dt>Step 10:</dt>
        <dd>Declare – <br>
          int mid = left +
          <math xmlns="http://www.w3.org/1998/Math/MathML">
            <mfrac>
              <mn>(right - left)</mn>
              <mn>2</mn>
            </mfrac>
          </math>
          .
        </dd>
        <dt>Step 11:</dt>
        <dd>
          If array[mid] == searchValue, then go to step 17. <br />
          Else, proceed to step 12.
        </dd>
        <dt>Step 12:</dt>
        <dd>
          If array[mid] < searchValue, then proceed to step 13. <br>
            Else, go to step 15.
        </dd>
        <dt>Step 13:</dt>
        <dd>Left = mid + 1.</dd>
        <dt>Step 14:</dt>
        <dd>Go to step 9.</dd>
        <dt>Step 15:</dt>
        <dd>Right = mid - 1.</dd>
        <dt>Step 16:</dt>
        <dd>Go to step 9.</dd>
        <dt>Step 17:</dt>
        <dd>Return ‘mid’.</dd>
        <dt>Step 18:</dt>
        <dd>Go to step 20.</dd>
        <dt>Step 19:</dt>
        <dd>Return ‘-1’.</dd>
        <dt>Step 20:</dt>
        <dd>Return to ‘main’ function.</dd>
        <dt>Step 21:</dt>
        <dd>Store returned value in variable ‘result’.</dd>
        <dt>Step 22:</dt>
        <dd>
          If result != -1, proceed to step 23. <br>
          Else, go to step 25.
        </dd>
        <dt>Step 23:</dt>
        <dd>Display ‘result’, the index of ‘searchValue’ in ‘array’.</dd>
        <dt>Step 24:</dt>
        <dd>Go to Step 26.</dd>
        <dt>Step 25:</dt>
        <dd>Display ‘searchValue’ couldn’t be found in ‘array’.</dd>
        <dt>Step 26:</dt>
        <dd>End the program.</dd>
      </dl>
    </div>
  </div>
</body>

</html>