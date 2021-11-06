<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}
?>
<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
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
</style>
<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.png">
			<h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						
<li><a href="./index.php">HOME</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
							<li><a href="./index.php">HOME</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
								
							
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
<section>
<br>
<br>
<br>
<br>
<br>
<br>
<table >
<tr>    
<td><a href="indexe.php"><img src="images/3.png" style="width:128px;height:128px;"></a>
<br>
<br>
<h1 style="font-size: 40px;"><b>Employee</b></h1>
<br>
<br>
</td>

  

    
<td><a href="userdetails.php"><img src="images/3.png" style="width:128px;height:128px;"></a>

<br>
<br>
<h1 style="font-size: 40px;"><b>User</b></h1>
<br>
<br>

</td>
<td>
  </tr>

</table>



</section>
</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>