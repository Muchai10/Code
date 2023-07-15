<?php
	include 'includes/config.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: admin/home.php');
	}

	if(isset($_SESSION['student'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM student WHERE Student_ID=:Student_ID");
			$stmt->execute(['Student_ID'=>$_SESSION['student']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>