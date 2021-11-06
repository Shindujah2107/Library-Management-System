<?php
// including the database connection file
include_once("config.php");

  include "navbar.php";

if(isset($_POST['update']))
{    
    $jid = $_POST['jid'];
    $journalname = $_POST['journalname'];
   
    $author2 = $_POST['author2'];
   
$purchasedate2 = $_POST['purchasedate2'];
$language2 = $_POST['language2'];
$status2 = $_POST['status2'];
$quantity2 = $_POST['quantity2'];
 
    
    // checking empty fields
     if(empty($journalname) || empty($author2)|| empty($purchasedate2)|| empty($language2)|| empty($status2)|| empty($quantity2)) {   
            
        if(empty($journalname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        
        
        if(empty($author2)) {
            echo "<font color='red'>Author field is empty.</font><br/>";
        }
       
		if(empty($purchasedate2)) {
            echo "<font color='red'>Purchase Date field is empty.</font><br/>";
        }
		if(empty($language2)) {
            echo "<font color='red'>Language field is empty.</font><br/>";
        }
		if(empty($status2)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
		if(empty($quantity2)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
		
    } else {    
        //updating the table
        $sql = "UPDATE journal SET journalname=:journalname,  author2=:author2,purchasedate2=:purchasedate2,language2=:language2,status2=:status2,quantity2=:quantity2 WHERE jid=:jid";
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':jid', $jid);
       $query->bindparam(':journalname', $journalname);
        
        $query->bindparam(':author2', $author2);
		
		  $query->bindparam(':purchasedate2', $purchasedate2);
		   $query->bindparam(':language2', $language2);
		    $query->bindparam(':status2', $status2);
			 $query->bindparam(':quantity2', $quantity2);
			 
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
                
        //redirectig to the display page. In our case, it is index.php
       echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully Updated Journal details.</div>';
        echo "<br/><a href='journal.php'><b>View Result</b></a>";
    }
}
?>
<?php
//getting id from url
$jid = $_GET['jid'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM journal WHERE jid=:jid";
$query = $dbConn->prepare($sql);
$query->execute(array(':jid' => $jid));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $journalname = $row['journalname'];
  
    $author2 = $row['author2'];
	 
	  $purchasedate2 = $row['purchasedate2'];
	   $language2 = $row['language2'];
	    $status2 = $row['status2'];
		 $quantity2 = $row['quantity2'];
		 
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

 <div class="h"> <a href="journal.html">Add Journal</a> </div> 
  
  <div class="h"> <a href="report.php">Report Manmagement</a></div>
  <div class="h"> <a href="issue_info.php">Catelog</a></div>
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
    
     <h2 style="color:Black; font-family: Lucida Console; text-align: center"><b>Edit Journal</b></h2>
  <form class="book" action="" method="post">
        <table border="0">
            <tr> 
                <td>Journal Name</td>
                <td><input type="text" name="journalname" class="form-control" value="<?php echo $journalname;?>"></td>
            </tr>
            
            <tr> 
                <td>Author</td>
                <td><input type="text" name="author2" class="form-control" value="<?php echo $author2;?>"></td>
            </tr>
			
			
			
			<tr> 
                <td>Purchase Date</td>
                <td><input type="text" name="purchasedate2" class="form-control" value="<?php echo $purchasedate2;?>"></td>
            </tr>
			
			<tr> 
                <td>Language</td>
                <td><input type="text" name="language2" class="form-control" value="<?php echo $language2;?>"></td>
            </tr>
			<tr> 
                <td>Status</td>
                <td><input type="text" name="status2" class="form-control" value="<?php echo $status2;?>"></td>
            </tr>
			<tr> 
                <td>Quantity</td>
                <td><input type="text" name="quantity2" class="form-control" value="<?php echo $quantity2;?>"></td>
            </tr>
			
            <tr>
                <td><input type="hidden" name="jid" value=<?php echo $_GET['jid'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>