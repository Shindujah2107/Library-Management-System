<?php
//including the database connection file
include_once("config.php");
 include "navbar.php";
//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM books ORDER BY bid DESC");
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

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
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
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
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
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 <div class="h"> <a href="add.html">Add Books</a> </div> 
  
  <div class="h"> <a href="report.php">Report Managemant</a></div>
  
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<br>
<h2>List Of Books</h2>
 
    <table class='table table-bordered table-hover' >
 
   <tr style='background-color: #6db6b9e6;'>
	<td>Book Name</td>
        <td>Book Name</td>
        <td>ISBN</td>
        <td>Author</td>
        <td>Edition</td>
		<td>Purchase Date</td>
		<td>Language</td>
		<td>Status</td>
		<td>Quantity</td>
		<td>Department</td>
		<td>Action</td>
    </tr>
    <?php     
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
        echo "<tr>";
		 echo "<td>".$row['bid']."</td>";
        echo "<td>".$row['bookname']."</td>";
        echo "<td>".$row['isbn1']."</td>";
        echo "<td>".$row['author1']."</td>";    
		echo "<td>".$row['edition1']."</td>"; 
		echo "<td>".$row['purchasedate1']."</td>"; 
		echo "<td>".$row['language1']."</td>"; 
		echo "<td>".$row['status1']."</td>"; 
		echo "<td>".$row['quantity1']."</td>"; 
		echo "<td>".$row['department1']."</td>"; 
        echo "<td><a href=\"edit.php?bid=$row[bid]\">Edit</a> | <a href=\"delete.php?bid=$row[bid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    echo "</tr>";
	}
    ?>
    </table>
</body>
</html>