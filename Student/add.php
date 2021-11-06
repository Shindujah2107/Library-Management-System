<?php
include "connection.php";
include"navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>Books</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


	
<style type="text/css">
body{
		background-image:url("images/m4.jpg");
		background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	}
.srch
{
	padding-left:1000px;
}
body {
	background-color:#95dec8;
  font-family: "Lato", sans-serif;
  transition:background-color .5s;
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
.book{
width:400px;
margin:0px auto;
	
}
.form-control{
	background-color:#564545;
	color:white;
	height:40px;
}
</style>
</head>
<body>
<!--_____________sidenav________________ -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div style="color:white;margin-left:80px;">
  
  </div>
  <div class="h"><a href="add.php">Add Books</a></div>
  <div class="h"><a href="editbook.php">Edit Books</a></div>
   <div class="h"><a href="lostbookreport.php">Manage Report</a></div>
   <div class="h"><a href="#">Catelog</a></div>
</div>
<div id="main">

<span style="font-size:30px;cursor:pointer; color:black" onclick="openNav()">&#9776; open</span>
<div class="container">

<h2 style="color:black; font-family:Lucida Console; text-align:center"><b>ADD NEW BOOK</b></h2>
<form class="book" action="" method="post" style="text-align:center;>

<input type="text" name="name" class="form-control" placeholder="Book Name" required="">
<br>
<input type="text" name="bid" class="form-control" placeholder="Book id" required="">
<br>
<input type="text" name="name" class="form-control" placeholder="Book Name" required="">
<br>
<input type="text" name="Author" class="form-control" placeholder="Author Name" required="">
<br>
<input type="text" name="isbn" class="form-control" placeholder="ISBN" required="">
<br>
<input type="text" name="edition" class="form-control" placeholder="Edition" required="">
<br>
<input type="text" name="purchasedate" class="form-control" placeholder="Purchase Date" required="">
<br>
<input type="text" name="status" class="form-control" placeholder="Status" required="">
<br>
<input type="text" name="quantity" class="form-control" placeholder="Quantity" required="">
<br>
<input type="text" name="language" class="form-control" placeholder="Language" required="">
<br>
<input type="text" name="department" class="form-control" placeholder="Department" required="">
<br>

<button style="text-align:center;"class="btn btn-default" type="submit" name="submit"><b>ADD</b></button>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	if(isset($_SESSION['login_user']))
	{
		mysqli_query($db,"INSERT INTO books VALUES('$_POST[bid]','$_POST[name]','$_POST[authors]','$_POST[edition]','$_POST[status]','$_POST[quantity]','$_POST[department]');");
		?>
		<script type="text/javascript">
		alert("Book Added Successfully.");
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert("You need to login first");
		</script>
		<?php
	}
}
?>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
   document.getElementById("main").style.marginleft= "300px";
   document.body.style.backgroundColor="rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
   document.getElementById("main").style.marginleft= "0";
   document.body.style.backgroundColor="white";
}
</script>

</body>
</html>