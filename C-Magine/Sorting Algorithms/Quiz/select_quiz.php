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
    <title>Selection Sort Quiz</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../CSS/Quiz.css" />
    <script src="../../JavaScript/Quiz.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <h2>Selection Sort Concepts</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/select_theory.php'"
        >
          📖Theory
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/selection_sort.php'"
        >
          📜Algorithm
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Flowcharts/selection_sort.php'"
        >
          <img
            src="../../Images/flow.jpeg"
            class="emoji-size"
            alt="Flowchart"
          />
          Flowchart
        </li>
        <li class="menu-item" onclick="location.href='../Simulations/selection_sort.php'">
          🖥️Simulation
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
        <h1>Selection Sort Quiz</h1>
        <div id="quiz-container"></div>
        <div class="feedback" id="feedback"></div>
      </div>
    </div>
    <script>
      const quizData = [
        {
          question: "What is the worst-case time complexity of Selection Sort?",
          options: ["O(n)", "O(n^2)", "O(log n)", "O(n log n)"],
          correct: 1,
        },
        {
          question: "How does Selection Sort work?",
          options: [
            "By selecting the largest element and placing it first",
            "By repeatedly selecting the smallest element and placing it in sorted order",
            "By dividing the array into two parts and merging them",
            "By swapping adjacent elements",
          ],
          correct: 1,
        },
        {
          question: "What is the best-case time complexity of Selection Sort?",
          options: ["O(n)", "O(n^2)", "O(log n)", "O(n log n)"],
          correct: 1,
        },
        {
          question:
            "How many swaps does Selection Sort perform in the worst case?",
          options: ["O(n)", "O(n^2)", "O(log n)", "O(n log n)"],
          correct: 0,
        },
        {
          question: "Is Selection Sort a stable sorting algorithm?",
          options: [
            "Yes",
            "No",
            "Only for small inputs",
            "Only for large inputs",
          ],
          correct: 1,
        },
        {
          question: "Which of the following is true about Selection Sort?",
          options: [
            "It is an in-place sorting algorithm",
            "It always takes O(n log n) time",
            "It requires additional memory",
            "It is the fastest sorting algorithm",
          ],
          correct: 0,
        },
        {
          question: "What is the space complexity of Selection Sort?",
          options: ["O(1)", "O(n)", "O(n log n)", "O(n^2)"],
          correct: 0,
        },
        {
          question:
            "Selection Sort is more efficient than Bubble Sort in terms of:",
          options: [
            "Time complexity",
            "Memory usage",
            "Number of swaps",
            "All of the above",
          ],
          correct: 2,
        },
        {
          question: "What is the primary advantage of Selection Sort?",
          options: [
            "It is stable",
            "It works well with small datasets",
            "It is the fastest sorting algorithm",
            "It is a non-comparison-based sorting algorithm",
          ],
          correct: 1,
        },
        {
          question: "Selection Sort is preferred over Bubble Sort when:",
          options: [
            "The dataset is small",
            "The dataset is already sorted",
            "We need a stable sorting algorithm",
            "Sorting speed is not a concern",
          ],
          correct: 0,
        },
      ];

      document.addEventListener(
        "DOMContentLoaded",
        initializeQuiz(quizData, "Selection Sort")
      );
    </script>
  </body>
</html>
