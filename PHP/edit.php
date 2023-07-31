<?php

		// include ("../db/dbconn.php");
		// include ("session.php");

		include("session.php");
		include("config.php");

// Check if user has submitted the form
if(isset($_POST['edit'])){
	
	// Fetch user's password hash from the database
	$id = $_SESSION['Student_ID'];
	$query = mysqli_query ($conn, "SELECT * FROM student WHERE Student_ID = '$id' ") or die();
	$fetch = mysqli_fetch_array ($query);
	$password_hash = $fetch['Password'];
	
	// Check if entered password matches the user's password
	if(password_verify($_POST['Confirm_Password'], $password_hash)){
		
		// If passwords match, update user's account information
		$fname = mysqli_real_escape_string($conn, $_POST['First_Name']);
		$lname = mysqli_real_escape_string($conn, $_POST['Last_Name']);
		$email = mysqli_real_escape_string($conn, $_POST['Email_Address']);
		//$mealplan = mysqli_real_escape_string($conn, $_POST['Meal_plan']);
		$phone = mysqli_real_escape_string($conn, $_POST['Phone_Number']);
		$query = mysqli_query ($conn, "UPDATE student SET First_Name='$firstname', Last_Name='$lastname', Email_Address='$email', Phone_Number=$phone WHERE Student_ID='$id' ") or die();
		
		// Display success message
		echo '<script>alert("Account information updated successfully.");window.location.href="home.php";</script>';
		header("Location: /Code/index.php");
		exit;
	}else{
		
		// If passwords do not match, display error message
		echo '<script>alert("Incorrect password.");</script>';
	}
}

?>