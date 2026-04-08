<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Connect to MySQL
$conn = new mysqli("localhost", "root", "", "malex_db");

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Get form data
$first = $_POST['First'];
$last = $_POST['Last'];
$phone = $_POST['Phone'];
$email = $_POST['email'];

//Getting the reason stored as type
if(isset($_POST['reason'])){
    $reason = implode(",", $_POST['reason']);
}


//Insert into database
$sql = "INSERT INTO submissions (First, Last, Phone, Email, Reason)
        VALUES ('$first', '$last', '$phone', '$email', '$reason')";

if ($conn->query($sql) === TRUE)

$conn->close();

?>