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
  <title>Basics of Variables in C</title>
  <link rel="stylesheet" href="../../CSS/Theory.css" />
</head>

<body>
  <div class="sidebar">
    <h2>Variable Concepts</h2>
    <ul class="menu">
      <li
        class="menu-item"
        onclick="location.href='../Algorithms/basics_of_variables.php'">
        📜Algorithm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Flowcharts/basics_of_variables.php'">
        <img
          src="../../Images/flow.jpeg"
          class="emoji-size"
          alt="Flowchart" />
        Flowchart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li class="menu-item" onclick="location.href='../Simulations/basics_of_var.php'">
        🖥️Simulation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li
        class="menu-item"
        onclick="location.href='../Quiz/basics_var_quiz.php'">
        🧠Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <li
        class="menu-item"
        onclick="window.open('../../Code/newindex.html', '_blank')">
        ⚙️Code & Learn
      </li>
    </ul>
  </div>

  <div class="container">
    <h2>Basics of Variables in C</h2>
    <p>
      In C, a <strong>variable</strong> is a named memory location used to
      store data. It acts as a container that holds values which can change
      during the execution of a program.
    </p>

    <h3>1. Declaring and Initializing Variables</h3>
    <p>
      To use a variable in C, we need to <strong>declare</strong> it with a
      specific data type.
    </p>
    <code>
      #include &lt;stdio.h&gt;
      int main()
      {
        int age; // Declaration

        age = 25; // Initialization

        printf("Age: %d\n", age);

        return 0;
      }
    </code>

    <h3>2. Data Types in C</h3>
    <p>C provides different data types to store different kinds of values:</p>
    <table>
      <tr>
        <th>Data Type</th>
        <th>Size (bytes)</th>
        <th>Example</th>
      </tr>
      <tr>
        <td><strong>int</strong></td>
        <td>4</td>
        <td>10, -5, 100</td>
      </tr>
      <tr>
        <td><strong>float</strong></td>
        <td>4</td>
        <td>3.14, -0.99</td>
      </tr>
      <tr>
        <td><strong>char</strong></td>
        <td>1</td>
        <td>'A', 'b'</td>
      </tr>
      <tr>
        <td><strong>double</strong></td>
        <td>8</td>
        <td>3.1415926535</td>
      </tr>
    </table>

    <h3>3. Variable Initialization</h3>
    <p>Variables can be initialized at the time of declaration:</p>
    <code>
      #include &lt;stdio.h&gt;
      int main()
      {
        int a = 10; // Integer variable
        float pi = 3.14; // Floating point variable
        char grade = 'A'; // Character variable

        printf("a = %d, pi = %f, grade = %c\n", a, pi, grade);

        return 0;
      }
    </code>

    <h3>4. Basic Operations with Variables</h3>
    <p>Variables are used to perform various operations:</p>

    <h4>4.1 Arithmetic Operations</h4>
    <code>
      #include &lt;stdio.h&gt;
      int main()
      {
        int x = 10, y = 5;

        printf("Sum: %d\n", x + y);
        printf("Difference: %d\n", x - y);
        printf("Product: %d\n", x * y);
        printf("Quotient: %d\n", x / y);

        return 0;
      }
    </code>

    <h4>4.2 Swapping Two Variables</h4>
    <code>
      #include &lt;stdio.h&gt; 
      int main() 
      { 
        int a = 5, b = 10, temp;

        printf("Before Swap: a = %d, b = %d\n", a, b); 
        
        temp = a; 
        a = b; 
        b = temp; 
        
        printf("After Swap: a = %d, b = %d\n", a, b); 
        return 0; 
      }
    </code>

    <h3>5. Real-World Example: Celsius to Fahrenheit Conversion</h3>
    <code>
      #include &lt;stdio.h&gt; 
      int main() 
      { 
        float celsius, fahrenheit;

        printf("Enter temperature in Celsius: ");
        scanf("%f", &celsius);

        fahrenheit = (celsius * 9/5) + 32; 
        
        printf("Temperature in Fahrenheit: %.2f\n", fahrenheit); 
        
        return 0; 
      }
    </code>

    <h3>6. Summary Table</h3>
    <table>
      <tr>
        <th>Concept</th>
        <th>Description</th>
        <th>Example</th>
      </tr>
      <tr>
        <td><strong>Variable Declaration</strong></td>
        <td>Defines a variable and its type</td>
        <td><code>int age;</code></td>
      </tr>
      <tr>
        <td><strong>Variable Initialization</strong></td>
        <td>Assigns an initial value</td>
        <td><code>int age = 25;</code></td>
      </tr>
      <tr>
        <td><strong>Arithmetic Operations</strong></td>
        <td>Perform basic calculations</td>
        <td><code>x + y, x - y</code></td>
      </tr>
      <tr>
        <td><strong>Data Types</strong></td>
        <td>Define the kind of data a variable holds</td>
        <td><code>int, float, char, double</code></td>
      </tr>
      <tr>
        <td><strong>Real-World Example</strong></td>
        <td>Temperature conversion using variables</td>
        <td><code>fahrenheit = (celsius * 9/5) + 32;</code></td>
      </tr>
    </table>

    <h3>7. Conclusion</h3>
    <p>
      Understanding variables is essential as they are the foundation of any
      program. Proper variable usage helps in:
    </p>
    <ul>
      <li>Storing and manipulating data effectively.</li>
      <li>Performing mathematical operations.</li>
      <li>Making programs dynamic and interactive.</li>
    </ul>
  </div>
</body>

</html>