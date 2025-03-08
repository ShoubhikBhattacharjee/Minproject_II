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
    <title>Swap Numbers Visualization</title>
    <style>
      /* Original Styles */
      * {
        box-sizing: border-box;
      }
      body {
        background-color: #2e3b4e;
        color: #fff;
        font-family: "Courier New", Courier, monospace;
        display: flex;
        height: 100vh;
        margin: 0;
        overflow: hidden;
      }
      .sidebar {
        width: 250px;
        background-color: #1e293b;
        color: white;
        display: flex;
        flex-direction: column;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        height: 100vh;
      }
      .sidebar h2 {
        color: #facc15;
        text-align: center;
        margin-bottom: 20px;
      }
      .menu {
        list-style: none;
        padding: 0;
      }
      .menu-item {
        background-color: #334155;
        padding: 15px;
        margin: 10px 0;
        text-align: center;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
      }
      .menu-item:hover {
        background-color: #facc15;
        color: black;
      }
      .container {
        display: flex;
        width: 100%;
      }
      .sidebar1 {
        width: 50%;
        background-color: #2f3640;
        padding: 20px;
        overflow-y: auto;
      }
      .code-container {
        background-color: #1e1e1e;
        padding: 20px;
        max-height: 100%;
        overflow-y: auto;
      }
      pre {
        margin: 0;
        font-size: 16px;
        color: #dcdcdc;
      }
      .highlight {
        background-color: rgba(255, 235, 59, 0.6);
      }
      .visualization-section {
        width: 50%;
        padding: 20px;
        background-color: #273c75;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        overflow-y: auto;
      }
      h1 {
        margin-top: 0;
      }
      .tracker {
        font-size: 20px;
        margin: 10px 0;
        color: #ffcc00;
        text-align: center;
      }
      button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #ff5722;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 10px;
      }
      button:hover {
        background-color: #e64a19;
      }

      /* New Styles for Liquid Simulation, Input & Container Wrapper */
      .input-fields {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        font-size: 18px;
      }
      .input-fields label {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .input-fields input {
        width: 80px;
        padding: 5px;
        font-size: 16px;
        text-align: center;
        border-radius: 4px;
        border: 1px solid #ccc;
      }
      .simulation {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin: 20px 0;
        width: 100%;
      }
      .container-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .variable-name {
        font-size: 20px;
        margin-bottom: 5px;
      }
      .container-box {
        position: relative;
        width: 120px;
        height: 200px;
        border: 2px solid #fff;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.1);
        overflow: hidden;
      }
      /* Temporary container uses a dashed outline */
      #containerTemp {
        border-style: dashed;
      }
      .liquid {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: #03a9f4;
        transition: height 1.5s ease;
      }
      .liquid-temp {
        background: #ff5722;
      }
      .label {
        position: absolute;
        width: 100%;
        top: 50%;
        transform: translateY(-50%);
        font-weight: bold;
        font-size: 20px;
        pointer-events: none;
      }
    </style>
    
  </head>
  <body>
    <div class="sidebar">
      <h2>Swap Numbers Basic</h2>
      <ul class="menu">
        <li
          class="menu-item"
          onclick="location.href='../Theory/swap_num_theory.php'"
        >
          Theory
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Algorithms/swap_two_numbers.html'"
        >
          Algorithm
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Flowcharts/swap_two_numbers.html'"
        >
          Flowchart
        </li>
        <li
          class="menu-item"
          onclick="location.href='../Quiz/swap_num_quiz.html'"
        >
          Quiz
        </li>
      </ul>
    </div>
    <div class="container">
      <!-- Left Section: Code Display -->
      <div class="sidebar1">
        <div class="code-container">
          <pre id="code">
#include &lt;stdio.h&gt;
int main() {
    int a = 5, b = 10, temp;

    // Before swapping
    printf("Before Swap: a = %d, b = %d\n", a, b);

    // Swap logic
    temp = a;       // Step 1
    a = b;          // Step 2
    b = temp;       // Step 3

    // After swapping
    printf("After Swap: a = %d, b = %d\n", a, b);

    return 0;
}
        </pre
          >
        </div>
      </div>

      <!-- Right Section: Visualization -->
      <div class="visualization-section">
        <h1>Swapping Two Numbers Visualization</h1>
        <!-- Input Fields for Variables -->
        <div class="input-fields">
          <label>
            Value A:
            <input type="number" id="inputA" value="5" min="0" />
          </label>
          <label>
            Value B:
            <input type="number" id="inputB" value="10" min="0" />
          </label>
        </div>
        <div class="tracker" id="tracker">
          Enter values and press "Start Visualization" to see the swap process!
        </div>
        <!-- Liquid Simulation Container with Variable Names -->
        <div class="simulation">
          <!-- Container A -->
          <div class="container-wrapper">
            <div class="variable-name">a</div>
            <div class="container-box" id="containerA">
              <div class="liquid" id="liquidA"></div>
              <div class="label" id="valueA">5</div>
            </div>
          </div>
          <!-- Temporary Container -->
          <div class="container-wrapper">
            <div class="variable-name">temp</div>
            <div class="container-box" id="containerTemp">
              <div class="liquid liquid-temp" id="liquidTemp"></div>
              <div class="label" id="valueTemp">0</div>
            </div>
          </div>
          <!-- Container B -->
          <div class="container-wrapper">
            <div class="variable-name">b</div>
            <div class="container-box" id="containerB">
              <div class="liquid" id="liquidB"></div>
              <div class="label" id="valueB">10</div>
            </div>
          </div>
        </div>
        <button onclick="startVisualization()">Start Visualization</button>
      </div>
    </div>

    <script>
      // Helper delay function with increased timespan for clarity.
      function delay(ms) {
        return new Promise((resolve) => setTimeout(resolve, ms));
      }

      // Animate value change in a label from a start value to an end value over a given duration.
      function animateValue(element, start, end, duration) {
        const startTime = performance.now();
        function update() {
          const now = performance.now();
          let progress = (now - startTime) / duration;
          if (progress > 1) progress = 1;
          const currentValue = start + (end - start) * progress;
          element.textContent = Math.round(currentValue);
          if (progress < 1) {
            requestAnimationFrame(update);
          }
        }
        requestAnimationFrame(update);
      }

      async function startVisualization() {
        // Read and truncate user input values.
        let aVal = Math.trunc(Number(document.getElementById("inputA").value));
        let bVal = Math.trunc(Number(document.getElementById("inputB").value));

        // Update the input fields to reflect the truncated integer values.
        document.getElementById("inputA").value = aVal;
        document.getElementById("inputB").value = bVal;

        // Validate inputs.
        if (isNaN(aVal) || isNaN(bVal) || aVal < 0 || bVal < 0) {
          document.getElementById("tracker").textContent =
            "Please enter valid non-negative numbers.";
          return;
        }

        // Update the code snippet in the code container with the truncated values.
        const updatedCode = `#include <stdio.h>
int main() {
    int a = ${aVal}, b = ${bVal}, temp;

    // Before swapping
    printf("Before Swap: a = %d, b = %d\\n", a, b);

    // Swap logic
    temp = a;       // Step 1
    a = b;          // Step 2
    b = temp;       // Step 3

    // After swapping
    printf("After Swap: a = %d, b = %d\\n", a, b);

    return 0;
}`;
        document.getElementById("code").innerText = updatedCode;

        // Compute initial fill levels using the same ratio logic.
        let initialFillA, initialFillB;
        if (aVal >= bVal) {
          initialFillA = 100;
          initialFillB = aVal === 0 ? 0 : (bVal / aVal) * 100;
        } else {
          initialFillB = 100;
          initialFillA = bVal === 0 ? 0 : (aVal / bVal) * 100;
        }

        // Set the liquid heights.
        const liquidA = document.getElementById("liquidA");
        const liquidB = document.getElementById("liquidB");
        const liquidTemp = document.getElementById("liquidTemp");
        liquidA.style.height = initialFillA + "%";
        liquidB.style.height = initialFillB + "%";
        liquidTemp.style.height = "0%";

        // Set initial labels for values.
        document.getElementById("valueA").textContent = aVal;
        document.getElementById("valueB").textContent = bVal;
        document.getElementById("valueTemp").textContent = 0;

        document.getElementById(
          "tracker"
        ).textContent = `Initial values: Container a = ${aVal}, Container b = ${bVal}`;

        // Pause before starting the animation.
        await delay(2000);

        // Save current fill percentages.
        const fillA = initialFillA;
        const fillB = initialFillB;
        const animationDuration = 1500; // duration for liquid and number animations

        // Step 1: Pour liquid from Container a into the temporary container.
        document.getElementById("tracker").textContent =
          "Step 1: Pour liquid from Container a to temp.";
        liquidA.style.height = "0%";
        liquidTemp.style.height = fillA + "%";
        // Animate number changes for step 1.
        animateValue(
          document.getElementById("valueA"),
          aVal,
          0,
          animationDuration
        );
        animateValue(
          document.getElementById("valueTemp"),
          0,
          aVal,
          animationDuration
        );
        await delay(animationDuration + 1500);

        // Step 2: Pour liquid from Container b into Container a.
        document.getElementById("tracker").textContent =
          "Step 2: Pour liquid from Container b to a.";
        liquidB.style.height = "0%";
        liquidA.style.height = fillB + "%";
        // Animate number changes for step 2.
        animateValue(
          document.getElementById("valueB"),
          bVal,
          0,
          animationDuration
        );
        animateValue(
          document.getElementById("valueA"),
          0,
          bVal,
          animationDuration
        );
        await delay(animationDuration + 1500);

        // Step 3: Pour liquid from the temporary container into Container b.
        document.getElementById("tracker").textContent =
          "Step 3: Pour liquid from temp to b.";
        liquidTemp.style.height = "0%";
        liquidB.style.height = fillA + "%";
        // Animate number changes for step 3.
        animateValue(
          document.getElementById("valueTemp"),
          aVal,
          0,
          animationDuration
        );
        animateValue(
          document.getElementById("valueB"),
          0,
          aVal,
          animationDuration
        );
        await delay(animationDuration + 1500);

        // Final update: swapping is complete.
        document.getElementById(
          "tracker"
        ).textContent = `Swapping complete! Container a now holds ${bVal} and Container b holds ${aVal}.`;
      }
    </script>
  </body>
</html>
