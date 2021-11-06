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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">E-Book Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">E-Book details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="indexbook.php">E-Book Data</a></li>
					<li><a href="upload.php">Upload Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>E-Book Details</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$book_isbn = $_GET['book_isbn'];
				$cek = mysqli_query($connection, "SELECT * FROM ebooks WHERE book_isbn='$book_isbn'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data not found.</div>';
				}else{
					$delete = mysqli_query($connection, "DELETE FROM ebooks WHERE book_isbn='$book_isbn'");
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
						<option value="0">E-Book data filters</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
                        <option value="1" <?php if($filter == '1'){ echo 'selected'; } ?>>1</option>
                        <option value="2" <?php if($filter == '2'){ echo 'selected'; } ?>>2</option>
                        <option value="3" <?php if($filter == '3'){ echo 'selected'; } ?>>3</option>
                        <option value="4" <?php if($filter == '4'){ echo 'selected'; } ?>>4</option>
                        <option value="5" <?php if($filter == '5'){ echo 'selected'; } ?>>5</option>
                        <option value="6" <?php if($filter == '6'){ echo 'selected'; } ?>>6</option>
						
                        
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>book_isbn</th>
					<th>book_title</th>
					<th>book_author</th>
                     <th>book_image</th>
                     <th>book_deescr</th>
					<th>publisher_id</th>
					<th>pdf</th>
					<th>Tools</th>
					
				</tr>
				
				<?php
				if($filter){
					$sql = mysqli_query($connection, "SELECT * FROM ebooks WHERE post='$filter' ORDER BY book_isbn ASC");
				}else{
					$sql = mysqli_query($connection, "SELECT * FROM ebooks ORDER BY book_isbn ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Data missing.</td></tr>';
				}else{
					                
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
					
							<td>'.$row['book_isbn'].'</td>
							<td>'.$row['book_title'].'</td>
							<td>'.$row['book_author'].'</td>


							<td><a href="profile.php?book_isbn='.$row['book_isbn'].'"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> '.$row['book_image'].'</a></td>
                                                         <td>'.$row['book_deescr'].'</td>
                                                         <td>'.$row['publisher_id'].'</td>
							<td>'.$row['pdf'].'</td>
                            
                         
							
							<td>

								<a href="editb.php?eid='.$row['book_isbn'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							
								<a href="indexbook.php?aksi=delete&book_isbn='.$row['book_isbn'].'" title="Delete Data" onclick="return confirm(\'Do you want to  delete '.$row['book_title'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
					
					
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
  <nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<div class="navbar-footer">
<p style="color:white;text-align:center;">
		
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +880171*******
	</p>
	   </div>
</div>
</html>
