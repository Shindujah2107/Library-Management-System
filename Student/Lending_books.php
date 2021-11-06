<?php
  include "connection.php";
  include "navbar.php";
  include "serverlends.php";
  session_start();
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

	</style>

</head>
<body style="background-color: lightblue; ">
	
	<!--___________________search bar________________________-->

	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search book name.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>

		<!--___________________request book__________________-->
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit1" class="btn btn-default">Request
				</button>
		</form>
	</div>
	



	<h2>List Of Lending Books</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from books1 where bookname like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "ISBN";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				
				echo "<th>"; echo "Edition";  echo "</th>";
				
				echo "<th>"; echo "Language";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bookname']; echo "</td>";
				echo "<td>"; echo $row['isbn1']; echo "</td>";
				echo "<td>"; echo $row['author1']; echo "</td>";
				echo "<td>"; echo $row['edition1']; echo "</td>";
				
				echo "<td>"; echo $row['language1']; echo "</td>";
				echo "<td>"; echo $row['status1']; echo "</td>";
				echo "<td>"; echo $row['quantity1']; echo "</td>";
				echo "<td>"; echo $row['department1']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `books1` ORDER BY `books1`.`bookname` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "ISBN";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				
				echo "<th>"; echo "Edition";  echo "</th>";
				
				echo "<th>"; echo "Language";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bookname']; echo "</td>";
				echo "<td>"; echo $row['isbn1']; echo "</td>";
				echo "<td>"; echo $row['author1']; echo "</td>";
				echo "<td>"; echo $row['edition1']; echo "</td>";
				
				echo "<td>"; echo $row['language1']; echo "</td>";
				echo "<td>"; echo $row['status1']; echo "</td>";
				echo "<td>"; echo $row['quantity1']; echo "</td>";
				echo "<td>"; echo $row['department1']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
		if(isset($_POST['submit1']))
		{
			
				mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[username]', '$_POST[bid]', '', '', '');");
				?>
					<script type="text/javascript">
						alert("Request successfull!!");
					</script>
				<?php
			
				
		}

	?>

	
</div>
</body>
</html>