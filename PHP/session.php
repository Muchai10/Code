<?php
session_start();



if (!function_exists('logged_in')) {
    function logged_in() {
        return isset($_SESSION['Student_ID']);
    }
}

if(!function_exists('confirm_logged_in')){
    function confirm_logged_in() {
    if(isset($_SESSION['Student_ID']) && !empty($_SESSION['Student_ID'])) {
        // User is logged in
        return true;
    } else {
        // User is not logged in
        header('Location: signin.php'); // Redirect to signin page
        exit();
    }
}

}



?>