<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'library2');

	
	
	


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM publisher1 WHERE id=$id");
	
	header('location: publisher.php');
}
?>