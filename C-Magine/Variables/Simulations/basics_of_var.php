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
    <title>C Variable Execution</title>
    <link rel="stylesheet" href="../../CSS/Simulations.css">
    <style>
      .code-container {
        flex: 1;
        background: #1e1e1e;
        color: #dcdcdc;
        padding: 20px;
        font-family: "Courier New", monospace;
        font-size: 14px;
      }
      .highlight {
        background-color: rgba(76, 175, 80, 0.6);
      }
      .visualization-container {
        flex: 1;
        padding: 20px;
        background-color: #f1f5f9;
      }
      #memoryGrid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-bottom: 20px;
      }
      .memory-cell {
        border: 2px solid #333;
        padding: 10px;
        text-align: center;
        font-size: 1rem;
        font-weight: bold;
        background-color: #e0e0e0;
        transition: 0.5s;
      }
      .updated {
        background-color: yellow !important;
      }
      #consoleOutput {
        border: 1px solid #ccc;
        padding: 10px;
        height: 150px;
        overflow-y: auto;
        background-color: #fff;
        font-family: "Courier New", monospace;
        font-weight: bold;
      }
      .input-section {
        text-align: center;
        margin-top: 10px;
      }
      input {
        padding: 8px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <h2>Variable Concepts</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/basic_var_theory.php'"
        >
        📖Theory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/basics_of_variables.php'"
        >
        📜Algorithm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Flowcharts/basics_of_variables.php'"
        >
        <img
          src="../../Images/flow.jpeg"
          class="emoji-size"
          alt="Flowchart" />
        Flowchart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Quiz/basics_var_quiz.php'"
        >
        🧠Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
        <li
        class="menu-item"
        onclick="window.open('../../Code/newindex.html', '_blank')">
        ⚙️Code & Learn
      </li>
      </ul>
    </div>

    <div class="content-container">
      <div class="header">C Variable Execution</div>
      <div class="main-content">
        <div class="code-container">
          <pre id="code">
<span id="line1">#include &lt;stdio.h&gt;</span><br>
<span id="line2">int main() {</span>
<span id="line3">    int a, b, sum;</span>
<span id="line4">    float celsius, fahrenheit;</span>
<span id="line5">    float marks, percentage;</span><br>
<span id="line6">    printf("Enter two numbers: ");</span>
<span id="line7">    scanf("%d %d", &a, &b);</span><br>
<span id="line8">    sum = a + b;</span><br>
<span id="line9">    printf("Sum: %d", sum);</span><br>
<span id="line10">    printf("Enter Celsius: ");</span>
<span id="line11">    scanf("%f", &celsius);</span><br>
<span id="line12">    fahrenheit = (celsius * 9/5) + 32;</span><br>
<span id="line13">    printf("Fahrenheit: %.2f", fahrenheit);</span><br>
<span id="line14">    printf("Enter marks (out of 500): ");</span>
<span id="line15">    scanf("%f", &marks);</span><br>
<span id="line16">    percentage = (marks / 500) * 100;</span><br>
<span id="line17">    printf("Percentage: %.2f%%", percentage);</span><br>
<span id="line18">    return 0;</span>
<span id="line19">}</span>
                </pre>
        </div>

        <div class="visualization-container">
          <h1>Simulation Steps</h1>
          <div id="memoryGrid">
            <div class="memory-cell" id="cell-a">a = ?</div>
            <div class="memory-cell" id="cell-b">b = ?</div>
            <div class="memory-cell" id="cell-sum">sum = ?</div>
            <div class="memory-cell" id="cell-celsius">Celsius = ?</div>
            <div class="memory-cell" id="cell-fahrenheit">Fahrenheit = ?</div>
            <div class="memory-cell" id="cell-marks">Marks = ?</div>
            <div class="memory-cell" id="cell-percentage">Percentage = ?</div>
          </div>

          <div class="input-section">
            <input id="inputA" type="number" placeholder="Enter a" />
            <input id="inputB" type="number" placeholder="Enter b" />
            <input
              id="inputCelsius"
              type="number"
              placeholder="Enter Celsius"
            />
            <input id="inputMarks" type="number" placeholder="Enter Marks" />
            <button onclick="runSimulation()">Run Step</button>
          </div>

          <div id="consoleOutput"></div>
        </div>
      </div>
    </div>

    <script>
      let step = 0;
      const steps = [
        () => {
          highlightCode(7);
          updateMemory("cell-a", getInput("inputA"));
          updateMemory("cell-b", getInput("inputB"));
          logToConsole("a and b initialized.");
        },
        () => {
          highlightCode(8);
          updateMemory(
            "cell-sum",
            Number(getInput("inputA")) + Number(getInput("inputB"))
          );
          logToConsole("Sum calculated.");
        },
        () => {
          highlightCode(11);
          updateMemory("cell-celsius", getInput("inputCelsius"));
          logToConsole("Celsius input taken.");
        },
        () => {
          highlightCode(12);
          updateMemory(
            "cell-fahrenheit",
            ((getInput("inputCelsius") * 9) / 5 + 32).toFixed(2)
          );
          logToConsole("Converted to Fahrenheit.");
        },
        () => {
          highlightCode(15);
          updateMemory("cell-marks", getInput("inputMarks"));
          logToConsole("Marks input taken.");
        },
        () => {
          highlightCode(16);
          updateMemory(
            "cell-percentage",
            ((getInput("inputMarks") / 500) * 100).toFixed(2) + "%"
          );
          logToConsole("Percentage calculated.");
        },
      ];

      function getInput(id) {
        return document.getElementById(id).value || 0;
      }
      function updateMemory(id, value) {
        document.getElementById(id).textContent =
          id.replace("cell-", "") + " = " + value;
      }
      function logToConsole(msg) {
        document.getElementById("consoleOutput").innerHTML += msg + "<br>";
      }
      function highlightCode(line) {
        document
          .querySelectorAll("pre span")
          .forEach((el) => el.classList.remove("highlight"));
        document.getElementById("line" + line).classList.add("highlight");
      }
      function runSimulation() {
        if (step < steps.length) steps[step++]();
      }
    </script>
  </body>
</html>
