<?php
    $conn = mysqli_connect('localhost', 'administrator', 'test1234', 'cafeteria');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>