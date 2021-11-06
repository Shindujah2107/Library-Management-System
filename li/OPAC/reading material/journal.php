<?php
//including the database connection file
include_once("config.php");
 include "navbar.php";
 include "connection.php";
//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM journal ORDER BY jid DESC");
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

<div id="main">
  <div class="container" style="text-align: center;">



<br>
 <h2>List Of Journals</h2>
    <?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from journal where journalname like '%$_POST[search]%' ");

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
				echo "<th>"; echo "Journal-Name";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo " PurchaseDate";  echo "</th>";
				echo "<th>"; echo "Language";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['jid']; echo "</td>";
				echo "<td>"; echo $row['journalname']; echo "</td>";
				echo "<td>"; echo $row['author2']; echo "</td>";
				echo "<td>"; echo $row['purchasedate2']; echo "</td>";
				echo "<td>"; echo $row['language2']; echo "</td>";
				echo "<td>"; echo $row['status2']; echo "</td>";
				echo "<td>"; echo $row['quantity2']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `journal` ORDER BY `journal`.`journalname` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Journal-Name";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo " PurchaseDate";  echo "</th>";
				echo "<th>"; echo "Language";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['jid']; echo "</td>";
				echo "<td>"; echo $row['journalname']; echo "</td>";
				echo "<td>"; echo $row['author2']; echo "</td>";
				echo "<td>"; echo $row['purchasedate2']; echo "</td>";
				echo "<td>"; echo $row['language2']; echo "</td>";
				echo "<td>"; echo $row['status2']; echo "</td>";
				echo "<td>"; echo $row['quantity2']; echo "</td>";


				echo "</tr>";
			}
		echo "</table>";
		}
		?>
    
</body>
</html>