<?php
include 'db.php';


//Get form data
$first = $_POST['First'];
$last = $_POST['Last'];
$phone = $_POST['Phone'];
$email = $_POST['email'];
$adoptivepet = $_POST['hidden'];

//Getting the reason stored as type
if(isset($_POST['reason'])){
    $reason = implode(",", $_POST['reason']);
}


//Insert into database
$sql = "INSERT INTO submissions (First, Last, Phone, Email, Reason, Adoptivepet)
        VALUES ('$first', '$last', '$phone', '$email', '$reason', '$adoptivepet')";

if ($connect->query($sql) === TRUE){
    header("Location: ClientSideMainDublicate.php");
    exit();
}

$connect->close();

?>