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
  <meta name="viewport" content="width=device-width, initial-scale: 1.0">
  <title>Insertion Sort Visualization with Code Highlighting</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .highlight-orange {
      background-color: rgba(255, 165, 0, 0.6);
    }

    .highlight-green {
      background-color: rgba(76, 175, 80, 0.6);
    }

    .highlight-red {
      background-color: rgba(244, 67, 54, 0.6);
    }

    .highlight-yellow {
      background-color: rgba(255, 235, 59, 0.8);
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

    .array-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 20px;
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
      transition: all 0.3s ease;
      position: relative;
    }

    .pointer {
      width: 0;
      height: 0;
      border-left: 10px solid transparent;
      border-right: 10px solid transparent;
      border-top: 15px solid red;
      position: absolute;
      bottom: -18px;
      left: 50%;
      transform: translateX(-50%);
      display: none;
    }

    .array-box.active .pointer {
      display: block;
    }

    .array-box.sorted {
      background-color: #8bc34a;
      border-color: #558b2f;
    }

    .message {
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Insertion Sort Algorithm</h2>
    <ul class="menu">
      <li class="menu-item" onclick="location.href='../Theory/insert_theory.php'">📖Theory</li>
      <li class="menu-item" onclick="location.href='../Algorithms/insertion_sort.php'">📜Algorithm</li>
      <li class="menu-item" onclick="location.href='../Flowcharts/insertion_sort.php'"><img src="../../Images/flow.jpeg" class="emoji-size" alt = "Flowchart"> Flowchart
      </li>
      <li class="menu-item" onclick="location.href='../Quiz/insert_quiz.php'">🧠Quiz</li>
      <li class="menu-item" onclick="location.href='../Code/newindex.html'">⚙️Code & Learn</li>
    </ul>
  </div>
  <div class="code-container">
    <pre id="code">
#include &lt;stdio.h>

void insertionSort(int arr[], int n) {
    int key, j;
    for (int i = 1; i < n; i++) {
        key = arr[i];
        j = i - 1;

        // Move elements of arr[0..i-1], that are greater than key,
        // to one position ahead of their current position
        while (j >= 0 && arr[j] > key) {
            arr[j + 1] = arr[j];
            j = j - 1;
        }
        arr[j + 1] = key;
    }
}

int main() {
    int arr[100], n;

    printf("Enter the number of elements: ");
    scanf("%d", &n);

    printf("Enter the elements : ");
    for (int i = 0; i < n; i++) {
        scan("%d", &arr[i]);
    }

    printf("Original array: ");
    for (int i = 0; i < n; i++) {
        printf("%d ", arr[i]);
    }
    printf("\n");

    insertionSort(arr, n);

    printf("Sorted array: ");
    for (int i = 0; i < n; i++) {
        printf("%d ", arr[i]);
    }
    printf("\n");

    return 0;
}
    </pre>
  </div>

  <div class="visualization-container">
    <h1>Insertion Sort Visualization</h1>
    <div class="input-section">
      <input type="number" id="arraySizeInput" placeholder="Enter array size" class="form-control mb-2" />
      <button onclick="initializeArray()" class="btn btn-primary">Create Array</button>
      <br />
      <input type="number" id="arrayElementInput" placeholder="Enter array element" class="form-control my-2" />
      <button onclick="addElement()" class="btn btn-secondary">Add Element</button>
      <br /><br>
      <button onclick="startSort()" class="btn btn-success">Start Sorting</button>
    </div>

    <div class="array-container" id="arrayContainer"></div>
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
      resetVisualization();
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
        resetVisualization();
        renderArray();
        elementInput.value = "";
      }
    }

    function resetVisualization() {
      const codeBlock = document.getElementById("code");
      codeBlock.innerHTML = codeBlock.innerText.replace("<", "&lt;");
      document.getElementById("arrayContainer").innerHTML = "";
      document.getElementById("message").textContent = "";
    }

    function renderArray() {
      const container = document.getElementById("arrayContainer");
      container.innerHTML = "";
      array.forEach((num, index) => {
        const box = document.createElement("div");
        box.className = "array-box";
        box.textContent = num;

        const pointer = document.createElement("div");
        pointer.className = "pointer";
        box.appendChild(pointer);

        box.id = `box-${index}`;
        container.appendChild(box);
      });
    }

    function highlightCodeLine(lineNumber, colorClass) {
      const codeBlock = document.getElementById("code");
      const lines = codeBlock.innerText.replace("<", "&lt;").split("\n");
      codeBlock.innerHTML = lines
        .map((line, index) =>
          index === lineNumber
            ? `<span class="${colorClass}">${line}</span>`
            : line
        )
        .join("\n");
    }

    async function startSort() {
      if (array.length === 0) return;

      resetVisualization();
      renderArray();

      const message = document.getElementById("message");
      message.textContent = "Sorting...";

      for (let i = 1; i < array.length; i++) {
        const key = array[i];
        let j = i - 1;

        while (j >= 0 && array[j] > key) {
          highlightCodeLine(29, "highlight-yellow"); // Highlight the while loop logic
          
          // Swap elements
          array[j + 1] = array[j];
          document.getElementById(`box-${j + 1}`).textContent = array[j];
          renderArray();

          await new Promise((resolve) => setTimeout(resolve, 600)); // Wait before moving to next step
          j = j - 1;
        }

        array[j + 1] = key;
        document.getElementById(`box-${j + 1}`).textContent = key;
        renderArray();

        await new Promise((resolve) => setTimeout(resolve, 600)); // Wait before continuing to next iteration
      }

      highlightCodeLine(31, "highlight-green"); // Highlight end of sorting

      message.textContent = "Sorting complete!";
      const sortedBoxes = document.querySelectorAll('.array-box');
      sortedBoxes.forEach(box => box.classList.add('sorted'));
    }
  </script>
</body>
</html>
