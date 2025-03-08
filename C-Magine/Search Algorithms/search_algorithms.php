<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../LOGIN/login.html"); // Redirect to login if no session
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Algorithms in C</title>
    <link rel="stylesheet" href="../CSS/Categories.css">
</head>
<body>
    <div class="header">
        <h1 class="main-heading">PROGRAMS</h1>
    </div>

    <div class="container">
        <!-- Clickable cards linking to different HTML files -->
        <a href="Theory/linear_search_theory.php" target="_blank" class="card">
            <span class="icon"> 🔍</span>
            <p>Linear Search</p>
        </a>

        <a href="Theory/binary_search_theory.html" target="_blank" class="card">
            <span class="icon">🕵️‍♂️</span>
            <p>Binary Search</p>
        </a>
    </div>
</body>
</html>
