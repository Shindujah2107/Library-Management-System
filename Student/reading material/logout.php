<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		unset($_SESSION['login_user']);
	}
	header("location:./.Student_/login1.php");
?>