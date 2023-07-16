<?php
	include '../PHP/config.php';
	session_start();

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM student WHERE Student_ID=:Student_ID");
	$stmt->execute(['Student_ID'=>$_SESSION['admin']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>