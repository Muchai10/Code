<?php
    $conn = mysqli_connect('localhost', 'administrator', '', 'cafeteria1');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>