<?php
include "connection.php";
include"navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Magazine</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


	
<style type="text/css">

.srch
{
	padding-left:1000px;
}
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  margin-top:70px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.h:hover{
	color:white;
	width:300px;
	height:50px;
	background-color:#67bbbf;
}
</style>
</head>
<body>

<!-- ______________ Search bar_______________ -->
<div class="srch">
<form class="navbar-form" method="post" name="form1">

<input class="form-control" type="text" name="search" placeholder="search Magazines.." required="">
<button style="background-color:#70cad6;" type"submit" name="submit" class="btn btn-default">
<span class="glyphicon glyphicon-search"></span>
</button>
</form>


</div>


<h2>List Of Magazines</h2>
<?php
if(isset($_POST['submit']))
{
		$db=mysqli_connect("localhost","root","","library3");

	$q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%'");
	if(mysqli_num_rows($q)==0)
	{
		echo "Sorry! No book found.Try Searching again.";
	}
	else
	{
		echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:#70cad6;'>";
  //table header
  echo"<th>"; echo "ID"; echo"</th>";
  echo"<th>";  echo"Magazine-Name"; echo"</th>";
    echo"<th>";  echo"Author"; echo"</th>";  
	  
	echo"<th>";  echo"Monthissue"; echo"</th>"; 
	echo"<th>";  echo"Year"; echo"</th>"; 
	echo"<th>";  echo"Status"; echo"</th>";  
	echo"<th>";  echo"Quantity"; echo"</th>";  
	echo"<th>";  echo"Language"; echo"</th>"; 
	
	echo"</tr>";
	while($row=mysqli_fetch_assoc($q))
	{
		echo "<tr>";
		echo "<td>";echo $row['bid'];     echo "</td>";
		echo "<td>";echo $row['name'];    echo "</td>";
		echo "<td>";echo $row['author']; echo "</td>";
		
		echo "<td>";echo $row['monthissue']; echo "</td>";
		echo "<td>";echo $row['year'];echo "</td>";
		echo "<td>";echo $row['status'];  echo "</td>";
		echo "<td>";echo $row['quantity'];echo "</td>";
			echo "<td>";echo $row['language'];echo "</td>";
		
		echo "</tr>";
	}
	echo"</table>";
	}
}
/*if button is not pressed*/
else{
	$res=mysqli_query($db,"SELECT * FROM 'books' ORDER BY 'books'.'name' ASC;");
  echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:#70cad6;'>";
  //table header
  echo"<th>"; echo "ID"; echo"</th>";
  echo"<th>";  echo"Magazine-Name"; echo"</th>";
    echo"<th>";  echo"Author"; echo"</th>";  
	echo"<th>";  echo"MonthIssue"; echo"</th>";  
		echo"<th>";  echo"Year"; echo"</th>";
	echo"<th>";  echo"Status"; echo"</th>";  
	echo"<th>";  echo"Quantity"; echo"</th>";  
	echo"<th>";  echo"language"; echo"</th>"; 
	
	echo"</tr>";
	/*while($row=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>";echo $row['bid'];     echo "</td>";
		echo "<td>";echo $row['name'];    echo "</td>";
		echo "<td>";echo $row['author']; echo "</td>";
		
		echo "<td>";echo $row['monthissue']; echo "</td>";
		echo "<td>";echo $row['Year']; echo "</td>";
		echo "<td>";echo $row['status'];  echo "</td>";
		echo "<td>";echo $row['quantity'];echo "</td>";
		echo "<td>";echo $row['language'];echo "</td>";
		
		echo "</tr>";
	}*/
	
	echo"</table>";
}
  /*if(isset($_POST['submit1']))
 {
	 if(isset($_SESSION['login_user']))
	  {
		  mysqli_query($db,"DELETE from books where bid='$_POST[bid]';");
		  ?>
		  <script type="text/javascript">
		  alert("Delete Successful.");
		  </script>
		  <?
	 }
	  else{
		  ?>
		  <script type="text/javascript">
		  alert("Please Login First.");
		  </script>
		  <?
	  }
  }*/
  
 ?>
 </div>
</body>
</html>