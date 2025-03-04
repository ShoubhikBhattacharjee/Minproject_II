<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ Check if all required fields are filled

    if (
        empty($_POST['first_name']) ||
        empty($_POST['surname']) ||
        empty($_POST['email']) ||
        empty($_POST['department']) ||
        empty($_POST['password']) ||
        empty($_POST['confirm_password'])
    ) {
        echo "<script>alert('Please fill all the fields'); window.location.href='register.html';</script>";
        exit();
    }

    $first_name = trim($_POST['first_name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $deptno = (int) ($_POST['department']); // Convert to integer
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // ✅ Check if passwords match
    if ($password !== $confirm_password) {
        die("<script>alert('Passwords do not match!'); window.location.href='register.html';</script>");
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // ✅ Check if email already exists
    $stmt = $conn->prepare("SELECT email FROM user_details WHERE email = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("<script>alert('User already exists! Please login.'); window.location.href='login.html';</script>");
    }
    $stmt->close();

    // ✅ Insert new user (Fixed deptno type)
    $stmt = $conn->prepare("INSERT INTO user_details (first_name, surname, email, deptno, password) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssis", $first_name, $surname, $email, $deptno, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='login.html';</script>";
    } else {
        die("Execute failed: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
