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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Basics Of Variables Quiz</title>
  <link rel="stylesheet" href="../../CSS/Flowcharts.css">
</head>

<body>
  <div class="sidebar">
    <h2>Variables Concept</h2>
    <ul class="menu">
      <li
        class="menu-item"
        onclick="location.href='../Theory/basic_var_theory.php'">
        📖Theory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Algorithms/basics_of_variables.php'">
        📜Algorithm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Simulations/basics_of_var.php'">
        🖥️Simulation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Quiz/basics_var_quiz.php'">
        🧠Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
      <h1>Basics of Variables Flowchart</h1>
      <img src="../../Images/Basics of Variables.png" alt="Flowchart" />
    </div>
  </div>
</body>

</html>