<?php
    $conn = mysqli_connect("localhost", "root", "", "chatapp_php");
    if(!$conn){
        echo "Database Not Connected" . mysqli_connect_error();
    }