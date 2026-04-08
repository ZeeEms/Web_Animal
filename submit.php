<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "malex_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first = $_POST['First'];
$last = $_POST['Last'];
$phone = $_POST['Phone'];
$email = $_POST['email'];

// Insert into database
$sql = "INSERT INTO submissions (First, Last, Phone, Email)
        VALUES ('$first', '$last', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Submission saved! <br><a href='view.php'>View submissions</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>