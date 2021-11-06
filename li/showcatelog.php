<?php
  include "connection4.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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

.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}

	</style>

</head>
<body>
	







	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="isbn" placeholder="Enter ISBN" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit1" class="btn btn-default">Delete
				</button>
		</form>
	</div>

	<h2>CATELOGGING DETAILS</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from catelog5 where title like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "tile";	echo "</th>";
				echo "<th>"; echo "subtitle";  echo "</th>";
				echo "<th>"; echo "isbn";  echo "</th>";
				echo "<th>"; echo "ddcn";  echo "</th>";
				
				echo "<th>"; echo "author";  echo "</th>";
				echo "<th>"; echo "edition";  echo "</th>";
				echo "<th>"; echo "placeofpublisher";  echo "</th>";
				echo "<th>"; echo "noofpages";  echo "</th>";
				echo "<th>"; echo "price";  echo "</th>";
				echo "<th>"; echo "billno";  echo "</th>";
				echo "<th>"; echo "topicalterm";  echo "</th>";
				echo "<th>"; echo "department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['title']; echo "</td>";
				echo "<td>"; echo $row['subtitle']; echo "</td>";
				echo "<td>"; echo $row['isbn']; echo "</td>";
				echo "<td>"; echo $row['ddcn']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['placeofpublisher']; echo "</td>";
				echo "<td>"; echo $row['noofpages']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";
				echo "<td>"; echo $row['billno']; echo "</td>";
				echo "<td>"; echo $row['topicalterm']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";


				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `catelog5` ORDER BY `catelog5`.`title` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "tile";	echo "</th>";
				echo "<th>"; echo "subtitle";  echo "</th>";
				echo "<th>"; echo "isbn";  echo "</th>";
				echo "<th>"; echo "ddcn";  echo "</th>";
				
				echo "<th>"; echo "author";  echo "</th>";
				echo "<th>"; echo "edition";  echo "</th>";
				echo "<th>"; echo "placeofpublisher";  echo "</th>";
				echo "<th>"; echo "noofpages";  echo "</th>";
				echo "<th>"; echo "price";  echo "</th>";
				echo "<th>"; echo "billno";  echo "</th>";
				echo "<th>"; echo "topicalterm";  echo "</th>";
				echo "<th>"; echo "department";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['title']; echo "</td>";
				echo "<td>"; echo $row['subtitle']; echo "</td>";
				echo "<td>"; echo $row['isbn']; echo "</td>";
				echo "<td>"; echo $row['ddcn']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['placeofpublisher']; echo "</td>";
				echo "<td>"; echo $row['noofpages']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";
				echo "<td>"; echo $row['billno']; echo "</td>";
				echo "<td>"; echo $row['topicalterm']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";


				echo "</tr>";
			}
		echo "</table>";
		}
		?>
		<?php
		if(isset($_POST['submit1']))
		{
			
				mysqli_query($db,"DELETE from catelog5 where isbn = '$_POST[isbn]'; ");
				?>
					<script type="text/javascript">
						alert("Delete Successful.");
					</script>
				<?php
			}
			else
			{
					
			}
		
		

	?>
</div>
</body>
</html>