<?php
include("connection2.php");
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reports</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
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

 <div class="h"> <a href="addlostbook.php">Add Books</a> </div> 
  
  <div class="h"> <a href="report">Report Managemant</a></div>
  <div class="h"><a href="expired.php">Catelog</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
	<div class="container">
		<div class="content">
			<h2>TOP BOOKS DETAILS</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$nik= $_GET['bid'];
				$cek = mysqli_query($connection, "SELECT * FROM books WHERE bid='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data not found.</div>';
				}else{
					$delete = mysqli_query($connection, "DELETE FROM books WHERE bid='$nik'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data successfully deleted.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data failed to delete.</div>';
					}
				}
			}
			?>

			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Department</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="Computer Science and Technology" <?php if($filter == 'Computer Science and Technology'){ echo 'selected'; } ?>>Computer Science and Technology</option>
						<option value="Science and Technology" <?php if($filter == 'Science and Technology'){ echo 'selected'; } ?>>Science and Technology</option>
                        <option value="Export Agriculture" <?php if($filter == 'Export Agriculture'){ echo 'selected'; } ?>>Export Agriculture</option>
						<option value="Engineering Technology" <?php if($filter == 'Engineering Technology'){ echo 'selected'; } ?>>Engineering Technology</option>
						<option value="Bio-System Technology" <?php if($filter == 'Bio-System Technology'){ echo 'selected'; } ?>>Bio-System Technology</option>
					</select>
				</div>
				
			</form>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                 
					<th>Bookid</th>
					<th>BookName</th>
                    <th>ISBN</th>
                    <th>Author</th>
					<th>Edition</th>
					<th>PurchaseDate</th>
					<th>language</th>
					<th>Status</th>
					<th>quantity</th>
					<th>Department</th>
                    <th>Tools</th>
				</tr>
				
				<?php
				if($filter){
					$sql = mysqli_query($connection, "SELECT * FROM books WHERE department1='$filter' ORDER BY bid ASC");
				}else{
					$sql = mysqli_query($connection, "SELECT * FROM books ORDER BY bid ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Data missing.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							
							
							<td>'.$row['bid'].'</td>
							<td>'.$row['bookname'].'</td>
                            <td>'.$row['isbn1'].'</td>
							<td>'.$row['author1'].'</td>
							<td>'.$row['edition1'].'</td>
                            <td>'.$row['purchasedate1'].'</td>
							<td>'.$row['language1'].'</td>
							<td>'.$row['status1'].'</td>
							<td>'.$row['quantity1'].'</td>
							<td>'.$row['department1'].'</td>
							<td>

								<a href="editbook.php?nik='.$row['bid'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								
								<a href="newbook.php?aksi=delete&bid='.$row['bid'].'" title="Delete Data" onclick="return confirm(\'You are sure to delete data'.$row['bookname'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>&copy; Hadi Prasetyo 2016</p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
