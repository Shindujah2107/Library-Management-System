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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="http://www.hakkoblogs.com">Emplyee Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="http://www.hakkoblogs.com">Employee details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="indexbook.php"> Book Details</a></li>
					<li><a href="upload.php">Add Book</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Book  Details &raquo; Profile</h2>
			<hr />
			
			<?php
			$book_isbn = $_GET['book_isbn'];
			
			$sql = mysqli_query($connection, "SELECT * FROM ebooks WHERE book_isbn='$book_isbn'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: indexbook.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($connection, "DELETE FROM ebooks WHERE book_isbn='$book_isbn'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data successfully deleted.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to delete.</div>';
				}
			}
			?>
			
			<table class="table table-striped table-condensed">
				
				<tr>
					<th>Book Name</th>
					<td><?php echo $row['book_isbn']; ?></td>
				</tr>
				<tr>
					<th>Book Title</th>
					<td><?php echo $row['book_title']; ?></td>
				</tr>
                                <tr>
					<th>Book Author</th>
					<td><?php echo $row['book_author']; ?></td>
				</tr>
				<tr>
					<th>Book Describtion</th>
					<td><?php echo $row['book_deescr']; ?></td>
				</tr>
				
				<tr>
					<th>Publisher Id</th>
					<td><?php echo $row['publisher_id']; ?></td>
				</tr>

				
			</table>
			
			<a href="indexbook.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Back</a>
			<a href="editb.php?book_isbn=<?php echo $row['book_isbn']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="profileb.php?aksi=delete&book_isbn=<?php echo $row['book_isbn']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('You sure are going to delete it <?php echo $row['book_title']; ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>