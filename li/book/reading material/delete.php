<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$bid = $_GET['bid'];
 
//deleting the row from table
$sql = "DELETE FROM books WHERE bid=:bid";
$query = $dbConn->prepare($sql);
$query->execute(array(':bid' => $bid));
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>