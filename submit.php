<?php
include 'db.php';


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

if ($connect->query($sql) === TRUE){
    header("Location: ClientSideMainDublicate.php");
    exit();
}

$connect->close();

?>