<?php
include('config.php');


$id=$_POST['id'];

mysql_query("delete from books where bookID='$id'");

?>