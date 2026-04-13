<?php
    $host_name = "localhost";
    $database = "malex_db"; //Alexa's: shelteranimals
    $user_name = "root"; //Alexa's: Emalex
    $password = ""; //Alexa's: WebProgramming

    //Creating connection:
    $connect = mysqli_connect($host_name, $user_name, $password, $database);

    //Checking connection, if it couldn't connect it prints the string and error message
    if(mysqli_connect_errno())
        die("Vonnection failed:( ->" . mysqli_connect_error());
