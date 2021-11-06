<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}
?>
<?php
	session_start();
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
background-color: #FAEBD7;
padding:20px;
    float: center;
    line-height: 50px;
    margin-top: 70px;
    width:50%;
    text-align: center;
     border: 1px solid black;
     margin-right: 300px;
    margin-left: 300px;
position: relative;
    opacity: 0.97;
    background: transparent;

    
}
td{
    border: 3px solid black;
font-size: 40px;

}
td a{
font-size: 40px;
    color: black; 
text-decoration: none;
text-align: center;
float: left;
}
ul li ul li a{
    color: white;
    direction: none;
}
</style>
</head>


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
		
				  <table >
<tr>    
<td><a href=""><b><i class="fa fa-recycle" style="font-size:36px"></i>&nbsp;&nbsp;Circulation</b></a></td>
<td><a href="serials.php"><b><i class="fa fa-newspaper-o" style="font-size:36px"></i>&nbsp;&nbsp;Serials</b></a></td>
</tr>
<tr>    
<td><a href="patorns.php"><b><i class="fa fa-id-card" style="font-size:36px"></i>&nbsp;&nbsp;Patorns</b></a></td>
<td><a  disabled><b><i class="fa fa-line-chart" style="font-size:36px"></i>&nbsp;&nbsp;Acquisition</b></a></td>
</tr>
<tr>    
<td><a href=""><b><i class="fa fa-search" style="font-size:36px"></i>&nbsp;&nbsp;OPAC</b></a></td>
<td><a href="reading material/report.php"><b><i class="fa fa-edit" style="font-size:36px"></i>&nbsp;&nbsp;Report</b></a></td>
</tr>
<tr>    
<td><a href="reading material/index.php"><b><i class="fa fa-pencil-square-o" style="font-size:36px"></i>&nbsp;&nbsp;List</b></a></td>
<td><a disabled><b><i class="fa fa-tags" style="font-size:36px"></i>&nbsp;&nbsp;Cateloging</b></a></td>
</tr>


  </table>
			
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>