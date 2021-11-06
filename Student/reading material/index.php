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

 
</div>

<div id="main">




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
              
    echo "</tr>";
	}
    ?>
    </table>
</body>
</html>