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
    <title>Linear Search Algorithm</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../CSS/Algorithms.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Linear Search Concept</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/linear_search_theory.php'"
        >
          📖Theory
        </li>
        <li class="menu-item" onclick="location.href='../Flowcharts/linear_search.php'">
          <img
            src="../../Images/flow.jpeg"
            class="emoji-size"
            alt="Flowchart"
          />
          Flowchart
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Simulations/linear_search.php'"
        >
          🖥️Simulation
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Quiz/linear_quiz.php'"
        >
          🧠Quiz
        </li>
        <li
          class="menu-item"
          onclick="location.href='../../Code/newindex.html'"
        >
          ⚙️Code & Learn
        </li>
      </ul>
    </div>
    <div class="content-section">
      <div class="container">
        <h1>Linear Search Algorithm</h1>
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
            int n, searchValue, found = -1;
          </dd>
          <dt>Step 4:</dt>
          <dd>Accept size ‘n’ of an array ‘array’ from the user.</dd>
          <dt>Step 5:</dt>
          <dd>Declare array ‘array’ of size ‘n’.</dd>
          <dt>Step 6:</dt>
          <dd>
            Accept ‘n’ array elements from the user and store them in ‘array’.
          </dd>
          <dt>Step 7:</dt>
          <dd>
            Accept ‘searchValue’, the value to search for in ‘array’, from the
            user.
          </dd>
          <dt>Step 8:</dt>
          <dd>
            Set – <br />
            int i = 0.
          </dd>
          <dt>Step 9:</dt>
          <dd>
            If i < n, then go to step 10. <br />
            Else, go to step 14.
          </dd>
          <dt>Step 10:</dt>
          <dd>
            If array[i] == searchValue, then go to step 13. <br />
            Else, go to step 11.
          </dd>
          <dt>Step 11:</dt>
          <dd>Increment value of 'i' by 1.</dd>
          <dt>Step 12:</dt>
          <dd>Return to step 9.</dd>
          <dt>Step 13:</dt>
          <dd>Set value of ‘found’ as ‘i’.</dd>
          <dt>Step 14:</dt>
          <dd>
            If found != -1, go to step 15. <br />
            Else, go to step 17.
          </dd>
          <dt>Step 15:</dt>
          <dd>Display ‘found’, the index of ‘searchValue’ in ‘array’.</dd>
          <dt>Step 16:</dt>
          <dd>Go to step 18.</dd>
          <dt>Step 17:</dt>
          <dd>Display ‘searchValue’ couldn’t be found in ‘array’.</dd>
          <dt>Step 18:</dt>
          <dd>End the program.</dd>
        </dl>
      </div>
    </div>
  </body>
</html>
