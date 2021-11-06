<?php
  include "connection4.php";
  include "navbar.php";
?>
<html>
<head>
<style>
hr{
	height:5px;
	color:#000000;
	width:100%;
}
input[type="submit"]
{
	height:50px;
	width:150px;
	text-align:center;
	font-size:20px;
}
input[type="button"]
{
	height:50px;
	width:250px;
	text-align:center;
	font-size:20px;
}
input[type="text"]
{
	height:30px;
	width:800px;
	text-align:center;
	
}
form{
	padding:15px;
	font-style:bold;
}
body{
	background-image:url("images/13.jpg");
	marign:10px;
	 /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  font-style:bold;
		}
		
</style>
</head>
<body>

<form  action="" method="post" >
 <h1 align=center>CATELOGGING</h1>
  <br>
<a href=""><input type="submit" value="SAVE" name="submit"   height=50px width=200px >     <a href="showcatelog.php"><input type="button" value="SHOW DETAILS" name="button"   height=50px width=200px ></a><br>
 
  <b>INTERNATIONAL STANDARD BOOK NUMBER: </b><br>
    <b>ISBN: </b><br>
  
  <input type="text"  name="isbn" required><br>
  <hr width=100% height:10px color=black></hr>
 <b>DEWEY DECIMAL CLASSIFICATION NUMBER: </b><br>
   <b>Classification number: </b><br>
  <input type="text"  name="ddcn" required>
   <hr width=100% height=20px color=#000000></hr>
   
   <b>--MAIN ENTRY-- AUTHOR NAME </b><br>
   <b>Author: </b><br>
  <input type="text"  name="author" required>
   <hr width=100% height=20px color=#000000></hr>
   
    <b>TITLE STATEMENT</b><br>
   <b>Title: </b><br>
  <input type="text"  name="title"><br>
    <b>Sub Title: </b><br>
  <input type="text"  name="subtitle"><br>
   <hr width=100% height=20px color=#000000></hr>
   
    <b> EDITION STATEMENT </b><br>
   <b>Edition: </b><br>
  <input type="text"  name="edition" required><br>
   <hr width=100% height=20px color=#000000></hr>
   
     <b>PUBLICATION,DISTRIBUTION,ETC </b><br>
   <b>Place of Publisher: </b><br>
  <input type="text"  name="placeofpublisher" required><br>
   <hr width=100% height=20px color=#000000></hr>
   
     <b>PHYSICAL DESCRIPTION </b><br>
   <b> Number of pages: </b><br>
  <input type="text"  name="noofpages" required ><br>
  
    <b>Price: </b><br>
  <input type="text"  name="price" required><br>
  
    <b>BillNo: </b><br>
  <input type="text"  name="billno" required><br>
	<hr width=100% height=20px color=#000000>
	
	 <b>SUBJECT ADDED ENTRY-TOPICAL TERM: </b><br>
	 <b> Topical Term: </b><br>
  <input type="text"  name="topicalterm" required><br>
	<hr width=100% height=20px color=#000000></hr>
	
	
	 <b>DEPARTMENT: </b><br>
	<input type="text"  name="department" required><br>
	<hr width=100% height=20px color=#000000></hr>
</form>
<?php
    if(isset($_POST['submit']))
    {
      
        mysqli_query($db,"INSERT INTO catelog5 VALUES ('$_POST[title]', '$_POST[subtitle]','$_POST[isbn]', '$_POST[ddcn]', '$_POST[author]','$_POST[edition]','$_POST[placeofpublisher]','$_POST[noofpages]', '$_POST[price]','$_POST[billno]','$_POST[topicalterm]','$_POST[department]' );");
        ?>
          <script type="text/javascript">
		  
            var answer=confirm("catelogging Successfully. Do you want to add this book?");
			if (answer){
		
		window.location = "addbook.php";
	}
          </script>
<?php
        

      }
      else
      {
       
      }
    
?>
</body>
</html>