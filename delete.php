<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	include("connect.php");
	$sql = "DELETE FROM data WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		session_start();
		$_SESSION['delete'] = "Deleted";
		header("Location:index.php");
	}
}
?>