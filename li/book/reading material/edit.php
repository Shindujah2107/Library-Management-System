<?php
// including the database connection file
include_once("config.php");

  include "navbar.php";

if(isset($_POST['update']))
{    
$bid = (isset($_POST['bid']) ? $_POST['bid'] : '');
    $bid = $_POST['bid'];
    $bookname = $_POST['bookname'];
    $isbn1 = $_POST['isbn1'];
    $author1 = $_POST['author1'];
    $edition1 = $_POST['edition1'];
$purchasedate1 = $_POST['purchasedate1'];
$language1 = $_POST['language1'];
$status1 = $_POST['status1'];
$quantity1 = $_POST['quantity1'];
$department1 = $_POST['department1'];    
    
    // checking empty fields
     if(empty($bookname) || empty($isbn1) || empty($author1)|| empty($edition1)|| empty($purchasedate1)|| empty($language1)|| empty($status1)|| empty($quantity1)|| empty($department1)) {   
            
        if(empty($bookname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($isbn1)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($author1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($edition1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		if(empty($purchasedate1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		if(empty($language1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		if(empty($status1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		if(empty($quantity1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		if(empty($department1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $sql = "UPDATE books SET bookname=:bookname, isbn1=:isbn1, author1=:author1,edition1=:edition1,purchasedate1=:purchasedate1,language1=:language1,status1=:status1,quantity1=:quantity1,department1=:department1 WHERE bid=:bid";
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':bid', $bid);
       $query->bindparam(':bookname', $bookname);
        $query->bindparam(':isbn1', $isbn1);
        $query->bindparam(':author1', $author1);
		 $query->bindparam(':edition1', $edition1);
		  $query->bindparam(':purchasedate1', $purchasedate1);
		   $query->bindparam(':language1', $language1);
		    $query->bindparam(':status1', $status1);
			 $query->bindparam(':quantity1', $quantity1);
			  $query->bindparam(':department1', $department1);
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
                
        //redirectig to the display page. In our case, it is index.php
         echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully Updated Books details.</div>';
        echo "<br/><a href='index.php'><b>View Result</b></a>";
    
    }
}
?>
<?php
//getting id from url
$bid = $_GET['bid'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM books WHERE bid=:bid";
$query = $dbConn->prepare($sql);
$query->execute(array(':bid' => $bid));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $bookname = $row['bookname'];
    $isbn1 = $row['isbn1'];
    $author1 = $row['author1'];
	 $edition1 = $row['edition1'];
	  $purchasedate1 = $row['purchasedate1'];
	   $language1 = $row['language1'];
	    $status1 = $row['status1'];
		 $quantity1 = $row['quantity1'];
		  $department1 = $row['department1'];
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

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 <div class="h"> <a href="add.html">Add Books</a> </div> 
  
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
    
     <h2 style="color:white; font-family: Lucida Console; text-align: center"><b>EDIT BOOK</b></h2>
  <form class="book" action="" method="post">
        <table border="0">
            <tr> 
                <td>Book Name</td>
                <td><input type="text" name="bookname" class="form-control" value="<?php echo $bookname;?>"></td>
            </tr>
            <tr> 
                <td>ISBN</td>
                <td><input type="text" name="isbn1" class="form-control" value="<?php echo $isbn1;?>"></td>
            </tr>
            <tr> 
                <td>Author</td>
                <td><input type="text" name="author1" class="form-control" value="<?php echo $author1;?>"></td>
            </tr>
			
			<tr> 
                <td>Edition</td>
                <td><input type="text" name="edition1" class="form-control" value="<?php echo $edition1;?>"></td>
            </tr>
			
			<tr> 
                <td>Purchase Date</td>
                <td><input type="text" name="purchasedate1" class="form-control" value="<?php echo $purchasedate1;?>"></td>
            </tr>
			
			<tr> 
                <td>Language</td>
                <td><input type="text" name="language1" class="form-control" value="<?php echo $language1;?>"></td>
            </tr>
			<tr> 
                <td>Status</td>
                <td><input type="text" name="status1" class="form-control" value="<?php echo $status1;?>"></td>
            </tr>
			<tr> 
                <td>Quantity</td>
                <td><input type="text" name="quantity1" class="form-control" value="<?php echo $quantity1;?>"></td>
            </tr>
			<tr> 
                <td>Department</td>
                <td><input type="text" name="department1" class="form-control" value="<?php echo $department1;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="bid" value=<?php echo $_GET['bid'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>