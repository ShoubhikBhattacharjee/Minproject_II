<?php
session_start();
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        die("Invalid request.");
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT sr_no, first_name, email, password FROM user_details WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($sr_no, $first_name, $email, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $sr_no;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['email'] = $email;
            echo "Registration Success!";
            header("Location: ../index.html");
            exit();
        } else {
            echo "<script>alert('Incorrect password.'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('User not found.'); window.location.href='login.html';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    die("Invalid request method.");
}
?>
