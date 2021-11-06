<?php
// including the database connection file
include_once("connection5.php");

  include "navbar.php";

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $pubname = $_POST['pubname'];
    $pubaddress = $_POST['pubaddress'];
    $pubcontact = $_POST['pubcontact'];
    $publishingyear= $_POST['publishingyear'];
$bookname1 = $_POST['bookname1'];

    // checking empty fields
     if(empty($pubname) ||  empty($pubaddress)|| empty($pubcontact)|| empty($publishingyear)|| empty($bookname1)) {
                
        if(empty($pubname)) {
            echo "<font color='red'> Publisher Name field is empty.</font><br/>";
        }
        
        
        if(empty($pubaddress)) {
            echo "<font color='red'>Publisher Address field is empty.</font><br/>";
        }
        if(empty($pubcontact)) {
            echo "<font color='red'> Publisher Contact field is empty.</font><br/>";
        }
		if(empty($publishingyear)) {
            echo "<font color='red'>Publishing year field is empty.</font><br/>";
        }
		
		if(empty($bookname1)) {
            echo "<font color='red'>BookName field is empty.</font><br/>";
        }
		
    } else {    
        //updating the table
        $sql = "UPDATE publisher1 SET pubname=:pubname, pubaddress=:pubaddress, pubcontact=:pubcontact,publishingyear=:publishingyear,bookname1=:bookname1 WHERE id=:id";
		
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':id', $id);
        $query->bindparam(':pubname', $pubname);
        $query->bindparam(':pubaddress', $pubaddress);
        $query->bindparam(':pubcontact', $pubcontact);
		 $query->bindparam(':publishingyear', $publishingyear);
		  $query->bindparam(':bookname1', $bookname1);
		  
			 
			   
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
        
        //display success message
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully Updated Publisher details.</div>';
        echo "<br/><a href='publisher2.php'><b>View Result</b></a>";
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM publisher1 WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $pubname = $row['pubname'];
    $pubaddress = $row['pubaddress'];
    $pubcontact = $row['pubcontact'];
	 $publishingyear = $row['publishingyear'];
	  $bookname1= $row['bookname1'];
	   
		 
}
?>
<html>
<head>    
    <title>Edit Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {

  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  
		background-image:url("images/s.jpg");
		background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

	
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

.book
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
  height: 40px;
  width:350px;
}

	</style>

</head>
 
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			

 <div class="h"> <a href="publisher.html">Add Publisher</a> </div> 
 
  
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>
  <div class="container" style="text-align: center;">
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>
    
     <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>EDIT Publisher</b></h2>
  <form class="book" action="" method="post" padding=30px>
        <table border="0"  height=400px >
            <tr width=200px> 
                <td><b>Publisher Name</b></td>
                <td><input type="text" name="pubname" class="form-control" value="<?php echo $pubname;?>"></td>
            </tr>
			
            <tr width=200px> 
                <td><b>Publisher Address</b></td>
                <td><input type="text" name="pubaddress" class="form-control" value="<?php echo $pubaddress;?>"></td>
            </tr>
			<tr width=200px> 
                <td><b>Publisher Contactno</b></td>
                <td><input type="text" name="pubcontact" class="form-control" value="<?php echo $pubcontact;?>"></td>
            </tr>
            <tr width=200px> 
                <td><b>Publishing Year</b></td>
                <td><input type="text" name="publishingyear" class="form-control" value="<?php echo $publishingyear;?>"></td>
            </tr>
			
			<tr width=200px> 
                <td><b>Book Name<b></td>
                <td><input type="text" name="bookname1" class="form-control" value="<?php echo $bookname1;?>"></td>
            </tr>
			
			
			
            <tr width=200px>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td> <b><input type="submit" name="update" value="Update"></b></td>
            </tr>
        </table>
    </form>
</body>
</html>