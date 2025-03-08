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
    <title>Linear Search Flowchart</title>
    <link rel="stylesheet" href="../../CSS/Flowcharts.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Variables Concept</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/linear_search_theory.php'"
        >
          📖Theory
        </li>
        <li class="menu-item" onclick="location.href='../Algorithms/linear_search.php'">
          📜Algorithm
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
        <h1>Linear Search Flowchart</h1>
        <img src="../../Images/linear Search.png" alt="Flowchart" />
      </div>
    </div>
  </body>
</html>
