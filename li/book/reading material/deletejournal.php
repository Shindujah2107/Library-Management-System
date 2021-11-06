<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$jid = $_GET['jid'];
 
//deleting the row from table
$sql = "DELETE FROM journal WHERE jid=:jid";
$query = $dbConn->prepare($sql);
$query->execute(array(':jid' => $jid));
 
//redirecting to the display page (journal.php in our case)
header("Location:journal.php");
?>