<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}
?>
<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan MySQLi</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="http://www.hakkoblogs.com">Journal Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="http://www.hakkoblogs.com">Journal details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="indexjournal.php"> Journal Details</a></li>
					<li><a href="uploadj.php">Add Journal</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Journal  Details &raquo; Profile</h2>
			<hr />
			
			<?php
			$j_isbn = $_GET['j_isbn'];
			
			$sql = mysqli_query($connection, "SELECT * FROM ejournal WHERE j_isbn='$j_isbn'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: indexjournal.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($connection, "DELETE FROM ejournal WHERE j_isbn='$j_isbn'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data successfully deleted.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to delete.</div>';
				}
			}
			?>
			
			<table class="table table-striped table-condensed">
				
				<tr>
					<th>Journal ISBN</th>
					<td><?php echo $row['j_isbn']; ?></td>
				</tr>
				
                <tr>
					<th>Journal ISSN</th>
					<td><?php echo $row['j_issn']; ?></td>
				</tr>
				<!--<tr>
					<th>Journal Title</th>
					<td><?php echo $row['j_title']; ?></td>
				</tr>-->
				<tr>
					<th>Journal Describtion</th>
					<td><?php echo $row['j_descr']; ?></td>
				</tr>
				
				

				
			</table>
			
			<a href="indexjournal.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Back</a>
			<a href="editj.php?j_isbn=<?php echo $row['j_isbn']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="profilej.php?aksi=delete&j_isbn=<?php echo $row['j_isbn']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('You sure are going to delete it <?php echo $row['j_title']; ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>