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
    <title>Binary Search Quiz</title>
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
      <h2>Binary Search Concept</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/binary_search_theory.php'"
        >
          📖Theory
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/binary_search.php'"
        >
          📜Algorithm
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Flowchart/binary_search.php'"
        >
          <img
            src="../../Images/flow.jpeg"
            class="emoji-size"
            alt="Flowchart"
          />
          Flowchart
        </li>
        <li class="menu-item" onclick="location.href='../binary_search.php'">
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
        <h1>Binary Search Quiz</h1>
        <div id="quiz-container"></div>
        <div class="feedback" id="feedback"></div>
      </div>
    </div>
    <script>
      const quizData = [
        {
          question:
            "What is the key requirement for Binary Search to work correctly?",
          options: [
            "The array must be sorted",
            "The array must contain only positive numbers",
            "The array must be in reverse order",
            "The array must contain unique elements",
          ],
          correct: 0,
        },
        {
          question: "What is the worst-case time complexity of Binary Search?",
          options: ["O(n)", "O(log n)", "O(n log n)", "O(1)"],
          correct: 1,
        },
        {
          question:
            "Which searching algorithm is generally more efficient for large datasets?",
          options: [
            "Linear Search",
            "Binary Search",
            "Bubble Sort",
            "Selection Sort",
          ],
          correct: 1,
        },
        {
          question:
            "What happens if the middle element of the array is equal to the key in Binary Search?",
          options: [
            "Search continues in the left half",
            "Search continues in the right half",
            "Search stops as the element is found",
            "The array is rearranged",
          ],
          correct: 2,
        },
        {
          question:
            "In the worst case, how many comparisons are needed to find an element in an array of size 32 using Binary Search?",
          options: ["32", "16", "5", "8"],
          correct: 2,
        },
        {
          question:
            "Which of the following best describes the divide-and-conquer approach used in Binary Search?",
          options: [
            "Divides the array into three parts",
            "Divides the array into two equal parts and searches in one",
            "Sequentially checks each element",
            "Shuffles the array before searching",
          ],
          correct: 1,
        },
        {
          question:
            "What will be the time complexity of Binary Search if applied on an unsorted array?",
          options: ["O(log n)", "O(n)", "O(n log n)", "O(1)"],
          correct: 1,
        },
        {
          question:
            "Which of the following cases is NOT suitable for using Binary Search?",
          options: [
            "When the dataset is sorted",
            "When the dataset is small",
            "When insertions and deletions are frequent",
            "When the dataset is large",
          ],
          correct: 2,
        },
        {
          question:
            "Which data structure is commonly used to implement Binary Search efficiently?",
          options: ["Linked List", "Heap", "Array", "Graph"],
          correct: 2,
        },
        {
          question: "What is the best-case time complexity of Binary Search?",
          options: ["O(1)", "O(log n)", "O(n)", "O(n log n)"],
          correct: 0,
        },
      ];

      document.addEventListener(
        "DOMContentLoaded",
        initializeQuiz(quizData, "Binary Search")
      );
    </script>
  </body>
</html>
