<?php
// including the database connection file
include_once("config.php");

  include "navbar.php";

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $magazinename = $_POST['magazinename'];
    $monthissue = $_POST['monthissue'];
    $year = $_POST['year'];
    $status= $_POST['status'];
$quantity = $_POST['quantity'];
$language = $_POST['language'];
$author = $_POST['author'];

    // checking empty fields
     if(empty($magazinename) ||  empty($monthissue)|| empty($year)|| empty($status)|| empty($quantity)|| empty($language)|| empty($author)) {
                
        if(empty($magazinename)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        
        if(empty($monthissue)) {
            echo "<font color='red'>Month field is empty.</font><br/>";
        }
        if(empty($year)) {
            echo "<font color='red'>Year field is empty.</font><br/>";
        }
		if(empty($purchasedate1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		
		if(empty($status)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
		if(empty($quantity)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
		if(empty($language)) {
            echo "<font color='red'>Language field is empty.</font><br/>";
        }
		if(empty($author)) {
            echo "<font color='red'>Author field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $sql = "UPDATE magazine SET magazinename=:magazinename, monthissue=:monthissue, year=:year,status=:status,quantity=:quantity,language=:language,author=:author WHERE id=:id";
		
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':id', $id);
        $query->bindparam(':magazinename', $magazinename);
        $query->bindparam(':monthissue', $monthissue);
        $query->bindparam(':year', $year);
		 $query->bindparam(':status', $status);
		  $query->bindparam(':quantity', $quantity);
		   $query->bindparam(':language', $language);
		    $query->bindparam(':author', $author);
			 
			   
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
        
        //display success message
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully Updated Magazine details.</div>';
        echo "<br/><a href='magazine.php'><b>View Result</b></a>";
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM magazine WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $magazinename = $row['magazinename'];
    $monthissue = $row['monthissue'];
    $year = $row['year'];
	 $status = $row['status'];
	  $quantity= $row['quantity'];
	   $language = $row['language'];
	    $author = $row['author'];
		 
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
  
		background-image:url("images/12.jpg");
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

  			

 <div class="h"> <a href="magazine.html">Add Magazines</a> </div> 
 
  <div class="h"> <a href="report.php">Report Manmagement</a></div>
  
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
    
     <h2 style="color:white; font-family: Lucida Console; text-align: center"><b>EDIT Magazine</b></h2>
  <form class="book" action="" method="post">
        <table border="0">
            <tr> 
                <td>Magazine Name</td>
                <td><input type="text" name="magazinename" class="form-control" value="<?php echo $magazinename;?>"></td>
            </tr>
            <tr> 
                <td>Month Issue</td>
                <td><input type="text" name="monthissue" class="form-control" value="<?php echo $monthissue;?>"></td>
            </tr>
			<tr> 
                <td>Year</td>
                <td><input type="text" name="year" class="form-control" value="<?php echo $year;?>"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status" class="form-control" value="<?php echo $status;?>"></td>
            </tr>
			
			<tr> 
                <td>Quantity</td>
                <td><input type="text" name="quantity" class="form-control" value="<?php echo $quantity;?>"></td>
            </tr>
			
			
			
			<tr> 
                <td>Language</td>
                <td><input type="text" name="language" class="form-control" value="<?php echo $language;?>"></td>
            </tr>
			<tr> 
                <td>Author</td>
                <td><input type="text" name="author" class="form-control" value="<?php echo $author;?>"></td>
            </tr>
			
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>