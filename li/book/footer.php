<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	footer
	{
		height: 100px;
		width: 1361px;
		background-color: black;
	}
		.fa
		{
			margin: 0px 5px;
			padding: 5px;
			font-size: 20px;
			width: 20px;
			height: 20px;
			text-align: center;
			text-decoration: none;
			border-radius: 50%;
		}
		.fa:hover
		{
			opacity: .7;
		}
		
	</style>

</head>
<body>
<footer style="background-color: black; ">
	<div style="margin:0px 570px;">
	<p style="color:white;text-align: center;">
		<br>
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +942221234
	</p>
</div>
</footer>
</body>
</html>