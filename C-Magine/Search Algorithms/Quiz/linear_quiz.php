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
    <title>Linear Search Quiz</title>
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
      <h2>Linear Search Concept</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/linear_search_theory.php'"
        >
          📖Theory
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/linear_search.php'"
        >
          📜Algorithm
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Flowchart/linear_search.php'"
        >
          <img
            src="../../Images/flow.jpeg"
            class="emoji-size"
            alt="Flowchart"
          />
          Flowchart
        </li>
        <li class="menu-item" onclick="location.href='../linear_search.php'">
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
        <h1>Linear Search Quiz</h1>
        <div id="quiz-container"></div>
        <div class="feedback" id="feedback"></div>
      </div>
    </div>
    <script>
      const quizData = [
        {
          question:
            "What kind of loop is most commonly used for Linear Search in C?",
          options: ["while loop", "for loop", "do-while loop", "Both A and B"],
          correct: 3,
        },
        {
          question:
            "If a Linear Search algorithm is applied to an unsorted array of n elements, how many comparisons are required in the worst case?",
          options: ["n", "n/2", "log n", "1"],
          correct: 0,
        },
        {
          question:
            "What happens if the search key appears multiple times in an array during a Linear Search?",
          options: [
            "It returns the first occurrence index",
            "It returns the last occurrence index",
            "It returns the total count of occurrences",
            "It returns -1 if found more than once",
          ],
          correct: 0,
        },
        {
          question: "What is the best case scenario for Linear Search?",
          options: [
            "When the element is found at the last index",
            "When the element is found at the first index",
            "When the array is sorted",
            "When the array has duplicate values",
          ],
          correct: 1,
        },
        {
          question:
            "Which of the following statements is TRUE about Linear Search?",
          options: [
            "It works only on sorted arrays",
            "It can be used on both arrays and linked lists",
            "It requires a sorted array before searching",
            "It does not work on character arrays",
          ],
          correct: 1,
        },
        {
          question:
            "What is the time complexity of Linear Search in the average case?",
          options: ["O(1)", "O(log n)", "O(n)", "O(n^2)"],
          correct: 2,
        },
        {
          question:
            "Which of the following factors does NOT affect the performance of Linear Search?",
          options: [
            "Size of the array",
            "Position of the target element",
            "Sorting of the array",
            "Presence of duplicate elements",
          ],
          correct: 2,
        },
        {
          question:
            "In which of the following cases is Linear Search preferred over Binary Search?",
          options: [
            "When the dataset is small",
            "When the dataset is large and sorted",
            "When searching for an element multiple times",
            "When an index-based search is required",
          ],
          correct: 0,
        },
        {
          question:
            "How many comparisons are needed in the worst case to search for an element in an array of size 10 using Linear Search?",
          options: ["5", "10", "20", "1"],
          correct: 1,
        },
        {
          question:
            "Which of the following is NOT a characteristic of Linear Search?",
          options: [
            "It is simple to implement",
            "It requires sorting before searching",
            "It has O(n) time complexity in the worst case",
            "It works on both sorted and unsorted arrays",
          ],
          correct: 1,
        },
      ];

      document.addEventListener(
        "DOMContentLoaded",
        initializeQuiz(quizData, "Linear Search")
      );
    </script>
  </body>
</html>
