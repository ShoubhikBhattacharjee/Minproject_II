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
    <title>Insertion Sort Quiz</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../CSS/Quiz.css">
    <script src="../../JavaScript/Quiz.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <h2>Insertion Sort Concepts</h2>
      <ul class="menu">
        <li class="menu-item" onclick="location.href='../Theory/insert_theory.html'">
          📖Theory
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/insertion_sort.php'"
        >
        📜Algorithm
        </li>
        <li class="menu-item" onclick="location.href='../Flowcharts/insertion_sort.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt = "Flowchart"> Flowchart
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Simulations/insertion_sort.html'"
        >
        🖥️Simulation
        </li>
        <li class="menu-item" onclick="location.href='../../Code/newindex.html'">⚙️Code & Learn</li>
      </li>
      </ul>
    </div>
    <div class="content-section">
      <div class="container">
        <h1>Insertion Sort Quiz</h1>
        <div id="quiz-container"></div>
        <div class="feedback" id="feedback"></div>
      </div>
    </div>
    <script>
      const quizData = [
      {
      question: "What is the worst-case time complexity of Insertion Sort?",
      options: ["O(n)", "O(n^2)", "O(log n)", "O(nlogn)"],
      correct: 1
    },
    {
      question: "Insertion Sort is best suited for:",
      options: ["Large datasets", "Partially sorted data", "Random data", "All cases"],
      correct: 1
    },
    {
      question: "What is the best-case time complexity of Insertion Sort?",
      options: ["O(nlogn)", "O(n^2)", "O(log n)", "O(n)"],
      correct: 3
    },
    {
      question: "Insertion Sort is a:",
      options: ["Stable sort", "Unstable sort", "Non-comparison sort", "Recursive sort"],
      correct: 0
    },
    {
      question: "Which sorting algorithm is generally faster than Insertion Sort?",
      options: ["Bubble Sort", "Selection Sort", "Merge Sort", "None of the above"],
      correct: 2
    },
      {
      question: "Which of the following cases denote the best case in Insertion Sort?",
      options: ["Sorted Array(Descending Order)", "Unsorted Array", "Sorted Array(Ascending Order)", "All of the Above"],
      correct: 2
    },
      {
      question: "Which of the following cases denote the best case in Insertion Sort?",
      options: ["Sorted Array(Descending Order)", "Sorted Array(Ascending Order)", "Unsorted Array", "All of the Above"],
      correct: 0
    },
    {
      question: "How many passes are there in Insertion Sort?",
      options: ["n", "2n", "logn", "n - 1"],
      correct: 3
    },
    {
      question: "Which of the following cases denote the best case in Insertion Sort?",
      options: ["Sorted Array(Descending Order)", "Sorted Array(Ascending Order)", "Unsorted Array", "All of the Above"],
      correct: 0
    },
    {
      question: "Which of the following cases denote the best case in Insertion Sort?",
      options: ["Sorted Array(Descending Order)", "Sorted Array(Ascending Order)", "Unsorted Array", "All of the Above"],
      correct: 0
    },
      ];

      document.addEventListener("DOMContentLoaded", initializeQuiz(quizData, "Insertion Sort"));
    </script>
  </body>
</html>