<?php
//including the database connection file
include_once("config.php");
 include "navbar.php";
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

  			
            </div><br><br>

 <div class="h"> <a href="journal.html">Add Books</a> </div> 
  
  <div class="h"> <a href="report">Report Managemant</a></div>
  <div class="h"><a href="expired.php">Catelog</a></div>
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
<a href="journal.html">Add New Data</a><br/><br/>
 
    <table class='table table-bordered table-hover' >
 
   <tr style='background-color: #6db6b9e6;'>
	<td>Journal Id</td>
        <td>Journal Name</td>
        
        <td>Author</td>
        
		<td>Purchase Date</td>
		<td>Language</td>
		<td>Status</td>
		<td>Quantity</td>
		
		<td>Action</td>
    </tr>
    <?php     
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
        echo "<tr>";
		 echo "<td>".$row['jid']."</td>";
        echo "<td>".$row['journalname']."</td>";
      
        echo "<td>".$row['author2']."</td>";    
		
		echo "<td>".$row['purchasedate2']."</td>"; 
		echo "<td>".$row['language2']."</td>"; 
		echo "<td>".$row['status2']."</td>"; 
		echo "<td>".$row['quantity2']."</td>"; 
		 
        echo "<td><a href=\"editjournal.php?jid=$row[jid]\">Edit</a> | <a href=\"deletejournal.php?jid=$row[jid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    echo "</tr>";
	}
    ?>
    </table>
</body>
</html>