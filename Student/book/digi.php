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
table{
height: 450px;
    float: center;
    line-height: 20px;
    margin-top: 5px;
    width:50%;
    text-align: center;
     margin-right: 300px;
    margin-left: 300px;
    
}
td{
    border: none;

}
td a{
font-size: 40px;
    color: black; 
text-decoration: none;
text-align: center;
float: center;
}
body{
background-image: url("images/1.jpg ");
background-repeat:no-repeat;
background-size: 1361px 578px;

}
	</style>

</head>
<body>
	
	
			<h1>E-RESOURCES</h1>
	<br>
<br>
<br>
<table >
<tr>    
<td><a href="indexbook.php"><img src="images/e1.jpg" style="width:128px;height:128px;"></a>
<br>

<h1 style="font-size: 30px;"><b>E-Book</b></h1>
<br>

</td>

  

    
<td><a href="indexjournals.php"><img src="images/e2.jpg" style="width:128px;height:128px;"></a>

<br>

<h1 style="font-size: 30px;"><b>E-Journal</b></h1>

<br>

</td>

<td><a href="science.php"><img src="images/e3.jpg" style="width:128px;height:128px;"></a>


<br>
<h1 style="font-size: 30px;"><b>E-Pastpaper</b></h1>

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
