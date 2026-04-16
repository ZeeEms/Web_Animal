<?php
    $host_name = "localhost";
    $database = "malex_db";
    $user_name = "root";
    $password = "";

    //Creating connection:
    $connect = mysqli_connect($host_name, $user_name, $password, $database);

    //Checking connection, if it couldn't connect it prints the string and error message
    if(mysqli_connect_errno())
        die("Vonnection failed:( ->" . mysqli_connect_error());
