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
    <title>Variable Scope Simulation</title>
    <link rel="stylesheet" href="../../CSS/Simulations.css">
    <style>
      /* Content Area */
      .content-container {
        display: flex;
        flex-direction: column;
        flex: 1;
        overflow-y: auto;
      }
      .header {
        background-color: #10b981;
        color: white;
        text-align: center;
        padding: 10px;
        font-size: 1.5rem;
        position: sticky;
        top: 0;
        z-index: 1;
      }
      .main-content {
        display: flex;
        flex: 1;
        min-height: 0;
      }

      /* Code Container (Left Panel) */
      .code-container {
        flex: 1;
        background: #1e1e1e;
        color: #dcdcdc;
        padding: 20px;
        overflow-y: auto;
        font-family: "Courier New", monospace;
        font-size: 14px;
        white-space: pre-wrap;
      }
      .highlight {
        background-color: rgba(76, 175, 80, 0.6);
      }

      /* Visualization Container (Right Panel) */
      .visualization-container {
        flex: 1;
        padding: 20px;
        background-color: #f1f5f9;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
      }

      /* Memory Grid */
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
        background-color: #e0e0e0;
        font-weight: bold;
      }

      /* Console Output */
      #consoleOutput {
        border: 2px solid #333;
        padding: 10px;
        height: 150px;
        overflow-y: auto;
        background-color: white;
        font-family: "Courier New", monospace;
        font-weight: bold;
        color: black;
        margin-bottom: 10px;
      }

      /* Input Section */
      .input-section {
        text-align: center;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <h2>Scope of Variables Concepts</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/scopevar_theory.php'"
        >
          Theory
        </li>
        <li class="menu-item" onclick="location.href='../Algorithms/scope_of_variables.html'">
          Algorithm
        </li>
        <li class="menu-item" onclick="location.href='../Flowcharts/scope_of_variables.html'">
          Flowchart
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Quiz/var_scope_quiz.html'"
        >
          Quiz
        </li>
      </ul>
    </div>

    <!-- Content Area -->
    <div class="content-container">
      <div class="header">Variable Scope Simulation</div>
      <div class="main-content">
        <!-- Code Container -->
        <div class="code-container">
          <pre id="code">
<span id="c1">#include &lt;stdio.h&gt;</span>

<span id="c2">int globalVar = 10; // Global variable</span>

<span id="c3">void demoFunction() {</span>
<span id="c4">    int localVar = 5; // Local variable</span>
<span id="c5">    static int staticVar = 0; // Static variable</span>
<span id="c6">    staticVar++;</span>

<span id="c7">    printf("Local: %d, Static: %d, Global: %d\n", localVar, staticVar, globalVar);</span>
<span id="c8">}</span>

<span id="c9">int main() {</span>
<span id="c10">    demoFunction();</span>
<span id="c11">    demoFunction();</span>
<span id="c12">    return 0;</span>
<span id="c13">}</span>
        </pre>
        </div>

        <!-- Visualization Container -->
        <div class="visualization-container">
          <h1>Simulation Steps</h1>
          <div id="memoryGrid">
            <div class="memory-cell" id="stack">Stack (Local)</div>
            <div class="memory-cell" id="static">Static</div>
            <div class="memory-cell" id="global">Global</div>
          </div>
          <div id="consoleOutput"></div>
          <div class="input-section">
            <button onclick="runSimulation()">Run Simulation</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      let step = 0;

      function highlightCode(line) {
        document
          .querySelectorAll(".highlight")
          .forEach((el) => el.classList.remove("highlight"));
        document.getElementById(`c${line}`).classList.add("highlight");
      }

      function logToConsole(message) {
        const consoleOutput = document.getElementById("consoleOutput");
        const p = document.createElement("p");
        p.textContent = message;
        consoleOutput.appendChild(p);
        consoleOutput.scrollTop = consoleOutput.scrollHeight;
      }

      function runSimulation() {
        const stackMem = document.getElementById("stack");
        const staticMem = document.getElementById("static");
        const globalMem = document.getElementById("global");

        if (step === 0) {
          highlightCode(2);
          globalMem.innerHTML = "globalVar = 10";
          logToConsole("Global variable initialized.");
        } else if (step === 1) {
          highlightCode(10);
          stackMem.innerHTML = "localVar = 5";
          staticMem.innerHTML = "staticVar = 0";
          logToConsole(
            "Function called: localVar = 5, staticVar = 0, globalVar = 10"
          );
        } else if (step === 2) {
          highlightCode(11);
          staticMem.innerHTML = "staticVar = 1";
          logToConsole(
            "Function called again: localVar = 5, staticVar = 1, globalVar = 10"
          );
        } else {
          highlightCode(13);
          stackMem.innerHTML = "Stack Cleared";
          logToConsole("Local variable destroyed after function exits.");
        }
        step++;
      }
    </script>
  </body>
</html>
