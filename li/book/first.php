<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}
?>
<?php
 include "connection.php";
 include "nav11.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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

table{
height: 450px;
    float: center;
    line-height: 20px;
    margin-top: 5px;
    width:50%;
    text-align: center;
     margin-right: 300px;
    margin-left: 300px;
    
}
td{
    border: none;

}
td a{
font-size: 40px;
    color: black; 
text-decoration: none;
text-align: center;
float: center;
}
	</style>

</head>
<body>
	<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

            </div><br><br>

 
  <div class="h"> <a href="">First Year</a></div>
  <div class="h"> <a href="">Second Year</a></div>
  <div class="h"> <a href="">Third Year</a></div>
  <div class="h"> <a href="">Final Year</a></div>

</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Years</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
	


	
	<?php
?>
		
<table >
<tr>    
<td><a href="first1.php"><img src="images/s1.png" style="width:128px;height:128px;"></a>
<br>
<br>
<h1 style="font-size: 40px;"><b>Semester</b></h1>
<br>
<br>
</td>

  

    
<td><a href="second.php"><img src="images/s2.jpg" style="width:128px;height:128px;"></a>

<br>
<br>
<h1 style="font-size: 40px;"><b>Semester</b></h1>
<br>
<br>

</td>
<td>
  </tr>

</table>

	 <nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<div class="navbar-footer">
<p style="color:white;text-align:center;">
		
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +942221234
	</p>
	   </div>
</div>		
	

</body>
</html>