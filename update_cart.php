<?php
// update_cart.php
include "PHP/config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add' && isset($_POST['Food_ID'])) {
        $foodID = $_POST['Food_ID'];
        
        // Perform the cart update similar to the previous code you had in the 'add_' case
        // For example:
        $quantity_available = 30; // Replace this with the actual quantity available in the database
        if (isset($_SESSION['cart'][$foodID])) {
            $qty = $_SESSION['cart'][$foodID] + 2;
        } else {
            $qty = 2;
        }

        if ($qty > $quantity_available) {
            echo "The quantity you added exceeds the quantity available in our stores.";
        } else {
            $_SESSION['cart'][$foodID] = $qty;
            echo "Added 2 quantities of chips to the cart successfully.";
        }
    }
}
