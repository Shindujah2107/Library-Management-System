<?php
	session_start();
	 include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E_Resources</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
		.grid-container {
  display: grid;
  grid-gap: 80px;
  grid-template-columns: auto auto auto;
  background-color: #92a8d1;
  padding: 30px;
position: relative;
    opacity: 0.97;
    background: transparent;

}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 40px;
  font-size: 30px;
  text-align: center;
text-decoration:none;
}

body{
background-image: url("images/1.jpg ");
background-repeat:no-repeat;
background-size: 1361px 578px;

}
	</style>

</head>
<body>
	
	
			<h2>Reading Materials</h2>
	<br>
<br>
<br>
<table >
<tr>    


  

    
<td><a href="reading material/journal.php"><img src="images/j1.jpeg" style="width:128px;height:128px;"></a>

<br>

<h1 style="font-size: 30px;"><b>Journal</b></h1>

<br>

</td>

<td><a href="reading material/magazine.php"><img src="images/m1.jfif" style="width:128px;height:128px;"></a>


<br>
<h1 style="font-size: 30px;"><b>Magazines</b></h1>

<br>

</td>

  </tr>

</table>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<div class="navbar-footer">
<p style="color:white;text-align:center;">
		
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +880171*******
	</p>
</div>
</div>
</body>
</html>
