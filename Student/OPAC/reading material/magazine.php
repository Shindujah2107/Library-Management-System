<?php
//including the database connection file
include_once("config.php");
 include "navbar.php";
 include "connection.php";
//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM magazine ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 <style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {
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
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}

	</style>

<body>
<div class="srch">
<form class="navbar-form" method="post" name="form1">

<input class="form-control" type="text" name="search" placeholder="search books.." required="">
<button style="background-color:#70cad6;" type="submit" name="submit" class="btn btn-default">
<span class="glyphicon glyphicon-search"></span>
</button>
</form>


</div>


<br>
	<h2>List Of Magazines</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from magazine where magazinename like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No magazine found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Magazine-Name";  echo "</th>";
				echo "<th>"; echo "Month Issue";  echo "</th>";
				echo "<th>"; echo " Year";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['magazinename']; echo "</td>";
				echo "<td>"; echo $row['monthissue']; echo "</td>";
				echo "<td>"; echo $row['year']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `magazine` ORDER BY `magazine`.`magazinename` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Magazine-Name";  echo "</th>";
				echo "<th>"; echo "Month Issue";  echo "</th>";
				echo "<th>"; echo " Year";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['magazinename']; echo "</td>";
				echo "<td>"; echo $row['monthissue']; echo "</td>";
				echo "<td>"; echo $row['year']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";


				echo "</tr>";
			}
		echo "</table>";
		}
		?>
</body>
</html>