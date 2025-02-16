<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['first_name'], $_POST['surname'], $_POST['email'], $_POST['deptno'], $_POST['password'], $_POST['confirm_password'])) {
        die("Invalid request.");
    }

    $first_name = trim($_POST['first_name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $deptno = trim($_POST['deptno']); // Changed from department to deptno
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("<script>alert('Passwords do not match!'); window.location.href='register.html';</script>");
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // ✅ Check if email exists before inserting
    $stmt = $conn->prepare("SELECT email FROM user_details WHERE email = ?");
    if (!$stmt) {
        die("Prepare failed (Check Table/Columns): " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("<script>alert('User already exists! Please login.'); window.location.href='login.html';</script>");
    } 

    $stmt->close();

    // ✅ Insert new user (Updated deptno column)
    $stmt = $conn->prepare("INSERT INTO user_details (first_name, surname, email, deptno, password) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed (Check Table/Columns): " . $conn->error);
    }

    $stmt->bind_param("sssss", $first_name, $surname, $email, $deptno, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='login.html';</script>";
    } else {
        die("Execute failed: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
