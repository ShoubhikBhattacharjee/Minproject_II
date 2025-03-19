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
      <h2>Variables Concept</h2>
      <ul class="menu">
        <li class="menu-item" onclick="location.href='../Theory/basic_var_theory.php'">
          📖Theory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/basics_of_variables.php'"
        >
        📜Algorithm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li class="menu-item" onclick="location.href='../Flowcharts/basics_of_variables.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt = "Flowchart"> Flowchart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Flowcharts/basics_of_variables.php'"
        >
        🖥️Simulation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li class="menu-item" onclick="location.href='../../Code/newindex.html'">⚙️Code & Learn</li>
      </ul>
    </div>
    <div class="content-section">
      <div class="container">
        <h1>Basics of Variables Quiz</h1>
        <div id="quiz-container"></div>
        <div class="feedback" id="feedback"></div>
      </div>
    </div>
    <script>
     const quizData = [
  {
    question: "Which data type is used to store whole numbers in C?",
    options: [
      "float",
      "char",
      "int",
      "double"
    ],
    correct: 2
  },
  {
    question: "Which format specifier is used to take input for an integer variable in C?",
    options: [
      "%c",
      "%d",
      "%f",
      "%s"
    ],
    correct: 1
  },
  {
    question: "What is the correct formula for converting Celsius to Fahrenheit?",
    options: [
      "(Celsius × 9/5) + 32",
      "(Celsius × 5/9) + 32",
      "(Celsius × 9/5) - 32",
      "(Celsius + 32) × 5/9"
    ],
    correct: 0
  },
  {
    question: "What is the correct way to declare a floating-point variable in C?",
    options: [
      "float temperature;",
      "double temperature;",
      "int temperature;",
      "char temperature;"
    ],
    correct: 0
  },
  {
    question: "Which operator is used for addition in C?",
    options: [
      "-",
      "+",
      "*",
      "/"
    ],
    correct: 1
  },
  {
    question: "What is the output format specifier for a floating-point number with two decimal places?",
    options: [
      "%d",
      "%f",
      "%.2f",
      "%lf"
    ],
    correct: 2
  },
  {
    question: "Which arithmetic operation is used to calculate the percentage?",
    options: [
      "Division and multiplication",
      "Subtraction",
      "Multiplication only",
      "Addition and subtraction"
    ],
    correct: 0
  },
  {
    question: "What will happen if a floating-point number is stored in an int variable?",
    options: [
      "It will be rounded off",
      "It will cause a compilation error",
      "Only the decimal part will be stored",
      "The fractional part will be lost"
    ],
    correct: 3
  },
  {
    question: "Which function is used to take input from the user in C?",
    options: [
      "print()",
      "scanf()",
      "input()",
      "getchar()"
    ],
    correct: 1
  },
  {
    question: "What is the default value of an uninitialized int variable in C?",
    options: [
      "0",
      "Garbage value",
      "NULL",
      "Depends on the compiler"
    ],
    correct: 1
  }
];

document.addEventListener("DOMContentLoaded", initializeQuiz(quizData, "Basic Variable"));
    </script>
  </body>
</html>