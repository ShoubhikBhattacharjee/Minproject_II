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
  <title>Bubble Sort Quiz</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../CSS/Quiz.css">
  <script src="../../JavaScript/Quiz.js"></script>
</head>

<body>
  <div class="sidebar">
    <h2>Bubble Sort Concepts</h2>
    <ul class="menu">
      <li class="menu-item" onclick="location.href='../Theory/bubblesort_theory.php'">
        📖Theory
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Algorithms/bubble_sort.php'">
        📜Algorithm
      </li>
      <li class="menu-item" onclick="location.href='../Flowcharts/bubble_sort.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt="Flowchart"> Flowchart
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Simulations/bubble_sort.php'">
        🖥️Simulation
      </li>
      <li class="menu-item" onclick="location.href='../../Code/newindex.html'">⚙️Code & Learn</li>
      </li>
    </ul>
  </div>
  <div class="content-section">
    <div class="container">
      <h1>Bubble Sort Quiz</h1>
      <div id="quiz-container"></div>
      <div class="feedback" id="feedback"></div>
    </div>
  </div>
  <script>
    const quizData = [{
        question: "What is the worst-case time complexity of Bubble Sort?",
        options: ["O(n)", "O(n^2)", "O(log n)", "O(n log n)"],
        correct: 1
      },
      {
        question: "Bubble Sort repeatedly swaps adjacent elements if they are:",
        options: ["In correct order", "In reverse order", "Equal", "Already sorted"],
        correct: 1
      },
      {
        question: "Which of the following is true about Bubble Sort?",
        options: [
          "It is an in-place sorting algorithm",
          "It always performs the same number of swaps",
          "It is the most efficient sorting algorithm",
          "It cannot be optimized"
        ],
        correct: 0
      },
      {
        question: "What is the best-case time complexity of Bubble Sort?",
        options: ["O(n)", "O(n^2)", "O(log n)", "O(n log n)"],
        correct: 0
      },
      {
        question: "Bubble Sort is most efficient when:",
        options: [
          "The list is sorted in descending order",
          "The list is already sorted",
          "The list is random",
          "It does not depend on the input order"
        ],
        correct: 1
      },
      {
        question: "Which technique does Bubble Sort use?",
        options: ["Divide and Conquer", "Recursion", "Swapping adjacent elements", "Partitioning"],
        correct: 2
      },
      {
        question: "How many passes does Bubble Sort take in the worst case for n elements?",
        options: ["O(n)", "O(n^2)", "O(log n)", "O(n log n)"],
        correct: 1
      },
      {
        question: "Bubble Sort is considered a:",
        options: ["Stable sort", "Unstable sort", "Non-comparison sort", "Recursive sort"],
        correct: 0
      },
      {
        question: "What is the space complexity of Bubble Sort?",
        options: ["O(1)", "O(n)", "O(n log n)", "O(n^2)"],
        correct: 0
      },
      {
        question: "Which sorting algorithm is more efficient than Bubble Sort?",
        options: ["Selection Sort", "Insertion Sort", "Merge Sort", "All of the above"],
        correct: 3
      },
    ];

    document.addEventListener("DOMContentLoaded", initializeQuiz(quizData, "Bubble Sort"));
  </script>
</body>

</html>