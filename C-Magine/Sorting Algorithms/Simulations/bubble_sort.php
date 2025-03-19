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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bubble Sort Visualization with Code Highlighting</title>
  <link rel="stylesheet" href="../../CSS/Simulations.css">
  <style>
    .menu {
      list-style: none;
    }
    .code-container {
      flex: 1;
      background: #1e1e1e;
      color: #dcdcdc;
      padding: 20px;
      overflow-y: auto;
    }
    pre {
      margin: 0;
      font-size: 14px;
    }
    .highlight {
      background-color: rgba(255, 235, 59, 0.6);
      display: inline-block;
      width: 100%;
    }
    .visualization-container {
      flex: 1;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      overflow-y: auto;
    }
    h1 {
      color: #333;
    }
    .input-section {
      margin: 20px 0;
    }
    .input-section input,
    .input-section button {
      margin: 5px;
      padding: 10px;
      font-size: 16px;
    }
    .array-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 20px;
      position: relative; /* Added to position elements */
      width: 100%;
      height: 300px; /* Ensure container is large enough to hold the elements */
    }
    .array-box {
      width: 60px;
      height: 60px;
      margin: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
      font-weight: bold;
      border: 2px solid #ccc;
      background-color: #e0e0e0;
      position: absolute; /* Make boxes moveable */
      transition: transform 0.6s ease, background-color 0.6s ease;
    }
    .array-box.active {
      background-color: #ffe082;
      border-color: #fbc02d;
    }
    .array-box.swapped {
      background-color: #8bc34a;
      border-color: #558b2f;
    }
    .message {
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
      color: #555;
    }
      .emoji-size {
      width: 1.2em;  /* Same as an emoji */
      height: 1.2em;
      vertical-align: middle;  /* Aligns with text */
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Bubble Sort Algorithm</h2>
    <ul class="menu">
      <li class="menu-item" onclick="location.href='Theory/bubblesort_theory.php'">📖Theory</li>
      <li class="menu-item" onclick="location.href='../Algorithms/bubble_sort.php'">📜Algorithm</li>
      <li class="menu-item" onclick="location.href='../Flowcharts/bubble_sort.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt = "Flowchart"> Flowchart
      </li>
      <li class="menu-item" onclick="location.href='../Quiz/bubble_quiz.php'">🧠Quiz</li>
      <li class="menu-item" onclick="location.href='../Code/newindex.html'">⚙️Code & Learn</li>
    </ul>
  </div>
  <!-- Code Section -->
  <div class="code-container">
    <pre id="code">
#include &lt;stdio.h>

void bubbleSort(int array[], int size) {
    for (int i = 0; i < size - 1; i++) {
        for (int j = 0; j < size - i - 1; j++) {
            if (array[j] > array[j + 1]) {
                int temp = array[j];
                array[j] = array[j + 1];
                array[j + 1] = temp;
            }
        }
    }
}

int main() {
    int array[100];
    int size;

    printf("Enter the number of elements: ");
    scanf("%d", &size);

    printf("Enter %d elements:\n", size);
    for (int i = 0; i < size; i++) {
        scanf("%d", &array[i]);
    }

    bubbleSort(array, size);

    printf("Sorted array:\n");
    for (int i = 0; i < size; i++) {
        printf("%d ", array[i]);
    }

    return 0;
}
    </pre>
  </div>

  <!-- Visualization Section -->
  <div class="visualization-container">
    <h1>Bubble Sort Visualization</h1>

    <!-- Input Section -->
    <div class="input-section">
      <input type="number" id="arraySizeInput" placeholder="Enter array size" />
      <button onclick="initializeArray()">Create Array</button>
      <br />
      <input type="number" id="arrayElementInput" placeholder="Enter element" />
      <button onclick="addElement()">Add Element</button>
      <br />
      <button onclick="startSort()">Start Sorting</button>
    </div>

    <!-- Array Visualization -->
    <div class="array-container" id="arrayContainer"></div>

    <!-- Result Section -->
    <div class="message" id="message"></div>
  </div>

  <script>
    let array = [];
    let arraySize = 0;

    function initializeArray() {
      const sizeInput = document.getElementById("arraySizeInput");
      arraySize = parseInt(sizeInput.value);
      if (isNaN(arraySize) || arraySize <= 0) return;
      array = [];
      renderArray();
      document.getElementById("message").textContent = "Array created. Add elements.";
      sizeInput.value = "";
    }

    function addElement() {
      if (array.length >= arraySize) return;
      const elementInput = document.getElementById("arrayElementInput");
      const value = parseInt(elementInput.value);
      if (!isNaN(value)) {
        array.push(value);
        renderArray();
        elementInput.value = "";
      }
    }

    function renderArray() {
      const container = document.getElementById("arrayContainer");
      container.innerHTML = "";
      array.forEach((num, index) => {
        const box = document.createElement("div");
        box.className = "array-box";
        box.textContent = num;
        box.id = `box-${index}`;
        box.style.left = `${index * 70}px`; // Position boxes horizontally
        container.appendChild(box);
      });
    }

    function highlightCodeLine(lineNumber) {
      const codeBlock = document.getElementById("code");
      const lines = codeBlock.innerText.replace("<", "&lt;").split("\n");
      codeBlock.innerHTML = lines
        .map((line, index) =>
          index === lineNumber ? `<span class='highlight'>${line}</span>` : line
        )
        .join("\n");
    }

    async function startSort() {
      if (array.length === 0) return;

      const message = document.getElementById("message");
      message.textContent = "Sorting...";

      const n = array.length;

      for (let i = 0; i < n - 1; i++) {
        for (let j = 0; j < n - i - 1; j++) {
          const box1 = document.getElementById(`box-${j}`);
          const box2 = document.getElementById(`box-${j + 1}`);

          box1.classList.add("active");
          box2.classList.add("active");

          highlightCodeLine(9); // Highlight comparison

          await new Promise(resolve => setTimeout(resolve, 800)); // Wait 800ms

          if (array[j] > array[j + 1]) {
            // Swap the elements
            [array[j], array[j + 1]] = [array[j + 1], array[j]];
            renderArray(); // Re-render the array

            // Animate the swap with position changes
            box1.style.transform = `translateX(${70 * (j + 1) - 70 * j}px)`; // Move box1
            box2.style.transform = `translateX(${70 * j - 70 * (j + 1)}px)`; // Move box2

            // Wait for the animation to finish before continuing
            await new Promise(resolve => setTimeout(resolve, 600));
          }

          box1.classList.remove("active");
          box2.classList.remove("active");
        }
      }

      message.textContent = "Array sorted!";
    }
  </script>
</body>
</html>
