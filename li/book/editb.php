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
	<title>Edit Book</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	
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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="http://www.hakkoblogs.com">Book Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="http://www.hakkoblogs.com">Book Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="indexbook.php">Book Details</a></li>
					<li><a href="upload.php">Add Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Book Details &raquo; Edit Book</h2>
			<hr />
			
			<?php
			$book_isbn = $_GET['book_isbn'];
			$sql = mysqli_query($connection, "SELECT * FROM ebooks WHERE book_isbn='$book_isbn'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: indexbook.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
		
				$book_isbn		     = $_POST['book_isbn'];
				$book_title	 = $_POST['book_title'];
				$book_author	 = $_POST['book_author'];
				$book_image	     = $_POST['book_image'];
				$book_deescr		 = $_POST['book_deescr'];
				$publisher_id = $_POST['publisher_id'];
				$pdf		 = $_POST['pdf'];
				
				
				$update = mysqli_query($connection, "UPDATE ebooks SET book_isbn='$book_isbn', book_title='$book_title', book_author='$book_author', book_image='$book_image', book_deescr='$book_deescr', publisher_id='$publisher_id', pdf='$pdf' WHERE book_isbn='$book_isbn'") or die(mysqli_error());
				if($update){
					header("Location: editb.php?book_isbn=".$book_isbn."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to be saved, please try again.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data saved successfully.
</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Isbn</label>
					<div class="col-sm-4">
						<input type="text" name="book_isbn" value="<?php echo $row ['book_isbn']; ?>" class="form-control" placeholder="Book ISBN" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Title</label>
					<div class="col-sm-3">
					<input type="text" name="book_title" value="<?php echo $row ['book_title']; ?>" class="form-control" placeholder="Book Title" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Author</label>
					<div class="col-sm-3">
					<input type="text" name="book_author" value="<?php echo $row ['book_author']; ?>" class="form-control" placeholder="Book Author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Image</label>
					<div class="col-sm-3">
						<input type="file" name="book_image"  class="form-control" placeholder="Book Image" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Publisher Id</label>
					<div class="col-sm-2">
						<select name="publisher_id" class="form-control" required>
							<option value=""> - Publisher Id- </option>
							<option value="1">1</option>
							<option value="2">2</option>
                            <option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
                            <option value="6">6</option>
							
						</select>
					</div>
                    <div class="col-sm-3">
                    <b>Publisher Id :</b> <span class="label label-success"><?php echo $row['publisher_id']; ?></span>
				    </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Description</label>
					<div class="col-sm-4">
						<textarea name="book_deescr"  class="form-control" placeholder="Book Description" ><?php echo $row ['book_deescr']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">pdf</label>
					<div class="col-sm-4">
						<input type="file" name="pdf"  class="form-control" placeholder="Pdf" >
					</div>
				</div>
				
				
				
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="username" value="<?php //echo $row['username']; ?>" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass1" value="<?php //echo $row['password']; ?>" class="form-control" placeholder="Password">
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Save">
						<a href="indexbook.php" class="btn btn-sm btn-danger">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>