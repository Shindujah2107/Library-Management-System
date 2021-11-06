


<?php
include "connection.php";
include   "navbar.php";
  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
  box-sizing: border-box;
}
.navbar {
  float: right;
  width: 100%;
  padding-right:10px;
  padding-left: 10px;
  margin-left: 10px;
  margin-left: 10px;
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: grey;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
header
{
height:140px;
width: 100%;
background-color: black;
padding:10px;   
margin: 0;
}
section{
    padding-top: 250px;
height:450px;
width: 100%;
 border-right: 20px;
margin: 0;
padding:20px; 
background-image: url('lib/1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
table{

    float: center;
    line-height: 30px;
    margin-top: 70px;
    width:50%;
    text-align: center;
     border: 1px solid black;
     margin-right: 300px;
    margin-left: 300px;
    
}
td{
    border: 3px solid black;

}
td a{
font-size: 40px;
    color: black; 
text-decoration: none;
text-align: center;
float: center;
}
ul li ul li a{
    color: white;
    direction: none;
}

footer
{
height:100px;
width: 100%;
background-color: black;  
padding-top : 3px;
border:5px;
border-right: 20px;
padding-right: 10px;
}
</style>
</head>
<body>
  <header>
  <div class="logo">
    <h1 style="color:white;font-size: 25px;line-height: 80px;margin-top: 20px;word-spacing: 10px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
  </div>

<div class="navbar">
  <a href="#home">DASHBOARD</a>

  <div class="dropdown">
    <button class="dropbtn">USER 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">STUDENT</a>
      <a href="#">STAFF</a>
    
    </div>
  </div>
 <div class="dropdown">
    <button class="dropbtn">READING_MATERIALS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">BOOK</a>
      <a href="#">JOURNALS</a>
      <a href="#">MAGAZINES</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">EMPLOYEE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="librarian.php">LIBRARIAN</a>
      <a href="index.php">ADMIN</a>
      <a href="liba.php">LIBRARY_ASSISTANT</a>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">SERVICES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">E-RESOURSES</a>
      <a href="#">CHANGE PASSWORD</a>
      
    </div>
  </div> 



</div>
</header>
<section >
  
    <nav></nav>


    
      
  <table bgcolor="white">
<tr>    
<td><a href=""><b>Circulation</b></a></td>
<td><a href=""><b>Serials</b></a></td>
</tr>
<tr>    
<td><a href="FinalEmployee/index.php"><b>Patorns</b></a></td>
<td><a href="Acquisition.php"><b>Acquisition</b></a></td>
</tr>
<tr>    
<td><a href=""><b>Adavanced search</b></a></td>
<td><a href=""><b>Report</b></a></td>
</tr>
<tr>    
<td><a href=""><b>List</b></a></td>
<td><a href=""><b>Tools</b></a></td>
</tr>
<tr>    
<td><a href=""><b>Cateloging</b></a></td>
<td><a href=""><b>Authorities</b></a></td>
</tr>

  </table>




</section>
<footer>
  <p style="color: white;text-align: center;"><br>
    Email:Online.Library@gmail.com<br><br>
    Mobile:+94212221324
  </p>
</footer>
</body>
</html>
