<?php
	session_start();

	include 'conn.php';
	

	if(isset($_SESSION['candidates'])){
		$sql = "SELECT * FROM candidates WHERE id = '".$_SESSION['candidates']."'";
		$query = $conn->query($sql);
		$voter = $query->fetch_assoc();
	}
	else{
		header('location: ../index.php');
		exit();
	}

?>