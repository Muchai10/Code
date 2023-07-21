<?php
 
 if(isset($_POST['add_to_cart'])){
    $name = mysqli_real_escape_string($conn,$_POST['Name']);
    $qty = 1;
    $price = mysqli_real_escape_string($conn,$_POST['Price']);

    $query = mysqli_query($conn, "SELECT * FROM cart WHERE Name = $name");

    if(mysqli_num_rows($query) > 0) {
        $message[] = 'Product already added to cart';
    }
    else{
        $insert = mysqli_query($conn,"INSERT INTO cart
        (Name,Quantity,Price) 
        VALUES ('$name','$qty','$price')");
        $message[] = 'Product added to cart successfully';
    }
 }

?>