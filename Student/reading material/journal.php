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

  			

</div>

<div id="main">
  <div class="container" style="text-align: center;">



<br>
 <h2>List Of Journals</h2>
    <table class='table table-bordered table-hover' >
 
   <tr style='background-color: #6db6b9e6;'>
	<td>Journal Id</td>
        <td>Journal Name</td>
        
        <td>Author</td>
        
		<td>Purchase Date</td>
		<td>Language</td>
		<td>Status</td>
		<td>Quantity</td>
		
		
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
		       
    echo "</tr>";
	}
    ?>
    </table>
</body>
</html>