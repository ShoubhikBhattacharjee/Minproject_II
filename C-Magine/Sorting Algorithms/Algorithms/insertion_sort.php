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
    <title>Insertion Sort Algorithm</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="../../CSS/Algorithms.css" />
</head>

<body>
    <div class="sidebar">
        <h2>Insertion Sort Concept</h2>
        <ul class="menu">
            <li
                class="menu-item"
                onclick="location.href='../Theory/insert_theory.php'">
                📖Theory
            </li>
            <li class="menu-item" onclick="location.href='../Flowcharts/insertion_sort.php'">
                <img
                    src="../../Images/flow.jpeg"
                    class="emoji-size"
                    alt="Flowchart" />
                Flowchart
            </li>
            <li
                class="menu-item"
                onclick="location.href='../Simulations/insertion_sort.php'">
                🖥️Simulation
            </li>
            <li
                class="menu-item"
                onclick="location.href='../Quiz/insert_quiz.php'">
                🧠Quiz
            </li>
            <li
                class="menu-item"
                onclick="window.open('../../Code/newindex.html', '_blank')">
                ⚙️Code & Learn
            </li>
        </ul>
    </div>
    <div class="content-section">
        <div class="container">
            <h1>Insertion Sort Algorithm</h1>
            <dl>
                <dt>Step 1:</dt>
                <dd>
                    Start the program, including necessary header files and the 'main'
                    function.
                </dd>
                <dt>Step 2:</dt>
                <dd>Enter 'main' function.</dd>
                <dt>Step 3:</dt>
                <dd>
                    Declare variables - <br />
                    int arr[100], n;
                </dd>
                <dt>Step 4:</dt>
                <dd>Accept size ‘n’ of the array ‘arr’ from the user.</dd>
                <dt>Step 5:</dt>
                <dd>Accept ‘n’ array elements from the user and store them in ‘arr’.</dd>
                <dt>Step 6:</dt>
                <dd>Display the original array.</dd>
                <dt>Step 7:</dt>
                <dd>Call function ‘InsertionSort(arr, n)’.</dd>
                <dt>Step 8:</dt>
                <dd>Store ‘arr’, ‘n’ as formal aparameters ‘*arr’, ‘n’.</dd>
                <dt>Step 9:</dt>
                <dd>Declare variables – <br>
                    int key, j, i;
                </dd>
                <dt>Step 10:</dt>
                <dd>Set i = 1.</dd>
                <dt>Step 11:</dt>
                <dd>
                    If i < n, proceed to step 12. <br>
                        Else, go to step 21.
                </dd>
                <dt>Step 12:</dt>
                <dd>key = arr[i].</dd>
                <dt>Step 13:</dt>
                <dd>Set j = i - 1.</dd>
                <dt>Step 14:</dt>
                <dd>
                    If j >= 0 and arr[j] > key, proceed to step 15. <br />
                    Else, go to step 18.
                </dd>
                <dt>Step 15:</dt>
                <dd>Set arr[j + 1] = arr[j].</dd>
                <dt>Step 16:</dt>
                <dd>Decrement ‘j’ by 1.</dd>
                <dt>Step 17:</dt>
                <dd>Return to step 14.</dd>
                <dt>Step 18:</dt>
                <dd>Set arr[j + 1] = key.</dd>
                <dt>Step 19:</dt>
                <dd>Increment ‘i’ by 1.</dd>
                <dt>Step 20:</dt>
                <dd>Go to step 11.</dd>
                <dt>Step 21:</dt>
                <dd>Return to ‘main’ function.</dd>
                <dt>Step 22:</dt>
                <dd>Display the sorted array. </dd>
                <dt>Step 23:</dt>
                <dd>End the program.</dd>
            </dl>
        </div>
    </div>
</body>

</html>