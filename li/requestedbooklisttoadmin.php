<?php
  ///include "connection.php";
  include "navbar.php";
  include "server.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

		.srch
		{
			padding-left: 850px;

		}
		.form-control
		{
			width: 300px;
			height: 40px;
			background-color: black;
			color: white;
		}
		
		body {
			background-color: white;
			background-repeat: no-repeat;
  	font-family: "Lato", sans-serif;
  	transition: background-color .5s;
}



#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:b;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
.container
{
	height: 600px;
	background-color: lightblue;
	opacity: .8;
	color: black;
}

	</style>

</head>
<body>

<div class="container">
	<div class="srch">
		<br>
		<form method="post" action="" name="form1">
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="bid" class="form-control" placeholder="BID" required=""><br>
			<button class="btn btn-default" name="submit" type="submit">Submit</button><br>
		</form>
	</div>

	<h3 style="text-align: center;">Request of  Lending Books</h3>

	<?php
	
	if(isset($_SESSION['username']))
	{
		$sql= "SELECT * FROM `issue_book`";
		$res= mysqli_query($db,$sql);

		if(mysqli_num_rows($res)==0)
			{
				echo "<h2><b>";
				echo "There is no pending request.";
				echo "</h2></b>";
			}
		else
		{
			echo "<table class='table table-bordered' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "Username";  echo "</th>";
				//echo "<th>"; echo "Roll No";  echo "</th>";
				echo "<th>"; echo "BID";  echo "</th>";
				//echo "<th>"; echo "Book Name";  echo "</th>";
				//echo "<th>"; echo "Authors Name";  echo "</th>";
				//echo "<th>"; echo "Edition";  echo "</th>";
				//echo "<th>"; echo "Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				//echo "<td>"; echo $row['author1']; echo "</td>";
				//echo "<td>"; echo $row['edition1']; echo "</td>";
				//echo "<td>"; echo $row['status1']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	else
	{
		
	}

	if(isset($_POST['submit']))
	{
		$_SESSION['name']=$_POST['username'];
		$_SESSION['bid']=$_POST['bid'];

		?>
			<script type="text/javascript">
				window.location="approve.php"
			</script>
		<?php
	}

	?>
	</div>
</div>
</body>
</html>