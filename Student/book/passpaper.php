<?php
	session_start();
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
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Past Papers</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Past Papers</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="">Home</a></li>
					<li><a href="add.php"></a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
<br>
<br>
<br>
	<div class="container">
		<div class="content">
			<h1>PAST PAPERS</h1>
		<br>
<br>	
             <div class="grid-container">
  <div class="grid-item"><a href="indexbook.php"><h2>Applied Science</h2></a></div>
  <div class="grid-item"><a href="indexjournal.php"><h2>Management</h2></a></div>
  <div class="grid-item"><a href=""><h2>Agriculture</h2></a></div>  
  
  
  
</div>	
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
