<?php
$servername = "localhost";
$username = "Miniproject";
$password = "mascon";
$dbname = "cmagine";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
