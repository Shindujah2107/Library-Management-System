<?php
//including the database connection file
include_once("config.php");
 include "navbar.php";
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
<div id="mySidenav" class="sidenav">

  			


<div id="main">
  


<br>
	<h2>List Of Magazines</h2>
 
    <table class='table table-bordered table-hover' >
 
   <tr style='background-color: #6db6b9e6;'>
	<td>Magazine ID</td>
        <td>Magazine Name</td>
        <td>Month Issue</td>
        <td>Year</td>
        <td>Status</td>
		<td>Quantity</td>
		<td>Language</td>
		<td>Author</td>
		
		
    </tr>
    <?php     
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
        echo "<tr>";
		 echo "<td>".$row['id']."</td>";
        echo "<td>".$row['magazinename']."</td>";
        echo "<td>".$row['monthissue']."</td>";
        echo "<td>".$row['year']."</td>";    
		echo "<td>".$row['status']."</td>"; 
		echo "<td>".$row['quantity']."</td>"; 
		echo "<td>".$row['language']."</td>"; 
		echo "<td>".$row['author']."</td>"; 
		
           
    echo "</tr>";
	}
    ?>
    </table>
</body>
</html>