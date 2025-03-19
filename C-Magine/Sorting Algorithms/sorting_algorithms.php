<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../LOGIN/login.html"); // Redirect to login if no session
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sorting Algorithms in C</title>
    <link rel="stylesheet" href="../CSS/Categories.css" />
  </head>
  <body>
    <div class="header">
      <h1 class="main-heading">PROGRAMS</h1>
    </div>

    <div class="container">
      <!-- Clickable cards linking to different HTML files -->
      <a href="Theory/select_theory.php" target="_blank" class="card">
        <span class="icon">📈</span>
        <p>Selection Sort</p>
      </a>

      <a href="Theory/bubblesort_theory.php" target="_blank" class="card">
        <span class="icon">🧮</span>
        <p>Bubble sort</p>
      </a>

      <a href="Theory/insert_theory.php" target="_blank" class="card">
        <span class="icon">📶</span>
        <p>Insertion Sort</p>
      </a>

      <a href="Theory/merge_theory.html" target="_blank" class="card">
        <span class="icon">🗂️</span>
        <p>Merge Sort</p>
      </a>

      <a href="Theory/quicksort_theory.html" target="_blank" class="card">
        <span class="icon">📊</span>
        <p>Quick Sort</p>
      </a>
    </div>
  </body>
</html>
