<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Employee Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Employee details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Master Data</a></li>
					<li><a href="add.php">Add Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Employee Details</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$eid = $_GET['eid'];
				$cek = mysqli_query($connection, "SELECT * FROM employee WHERE eid='$eid'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data not found.</div>';
				}else{
					$delete = mysqli_query($connection, "DELETE FROM employee WHERE eid='$eid'");
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
						<option value="0">Employee data filters</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
                                                  
						<option value="Librarian" <?php if($filter == 'Librarian'){ echo 'selected'; } ?>>Librarian</option>
						<option value="Library Assistant" <?php if($filter == 'Library Assistant'){ echo 'selected'; } ?>>Library Assistant</option>
                        
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Eid</th>
					<th>Name</th>
                    <th>P.Address</th>
                    <th>C.Address</th>
					<th>Phone</th>
					<th>Post</th>
					<th>Date of Join</th>
                    <th>Tools</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($connection, "SELECT * FROM employee WHERE post='$filter' ORDER BY eid ASC");
				}else{
					$sql = mysqli_query($connection, "SELECT * FROM employee ORDER BY eid ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Data missing.</td></tr>';
				}else{
					$no = 1;
                    $eid=100;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$eid.'</td>
							<td><a href="profile.php?eid='.$row['eid'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['ename'].'</a></td>
                            <td>'.$row['address1'].'</td>
                            <td>'.$row['address2'].'</td>
							<td>'.$row['phone'].'</td>
                            <td>'.$row['post'].'</td>
                             <td>'.$row['jdate'].'</td>
							
							<td>

								<a href="edit.php?eid='.$row['eid'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="password.php?eid='.$row['eid'].'" title="Change Password" data-placement="bottom" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
								<a href="index.php?aksi=delete&eid='.$row['eid'].'" title="Delete Data" onclick="return confirm(\'Do you want to  delete '.$row['ename'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$eid++;
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>Email:&nbsp Online.library@gmail.com</p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
