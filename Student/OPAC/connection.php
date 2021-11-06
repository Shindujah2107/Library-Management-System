<?php
$db=mysqli_connect("localhost","root","","library2");

if(!$db){
	die("Connection failed:".mysqli_connect_error());
}
echo "Connected Successfully.";
?>