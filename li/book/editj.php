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
	<title>Edit Journal</title>

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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="http://www.hakkoblogs.com">Journal Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="http://www.hakkoblogs.com">Journal Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="indexjournal.php">Journal Details</a></li>
					<li><a href="../index.php">Home</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Journal Details &raquo; Edit Journal</h2>
			<hr />
			
			<?php
			$j_isbn = isset($_GET['j_isbn'])? $_GET['j_isbn'] : '';
			$sql = mysqli_query($connection, "SELECT * FROM ejournal WHERE j_isbn='$j_isbn'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: impact.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
		
				$j_isbn		 = $_POST['j_isbn'];
				$j_title	 = $_POST['j_title'];
				$j_author	 = $_POST['j_author'];
				$j_volume	 = $_POST['j_volume'];
				$j_descr     = $_POST['j_descr'];
				$j_impact    = $_POST['j_impact'];
				
				
				
				$update = mysqli_query($connection, "UPDATE ejournal SET j_isbn='$j_isbn', j_title='$j_title', j_author='$j_author', j_volume='$j_volume', j_descr='$j_descr', j_impact='$j_impact' WHERE j_isbn='$j_isbn'") or die(mysqli_error());
				if($update){
					header("Location: editj.php?j_isbn=".$j_isbn."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to be saved, please try again.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data saved successfully.
</div>';
			}
			?>
			<form class="form-horizontal" action="indexjournal.php" method="post">
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Isbn</label>
					<div class="col-sm-4">
						<input type="text" name="j_isbn" value="<?php echo $row ['j_isbn']; ?>" class="form-control" placeholder="Journal Isbn" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Issn</label>
					<div class="col-sm-4">
						<input type="text" name="j_issn" value="<?php echo $row ['j_issn']; ?>" class="form-control" placeholder="Journal Issn" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Title</label>
					<div class="col-sm-3">
						<input type="text" name="j_title" value="<?php echo $row ['j_title']; ?>" class="form-control" placeholder="Journal Title" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Author</label>
					<div class="col-sm-3">
						<input type="text" name="j_author" value="<?php echo $row ['j_author']; ?>" class="form-control" placeholder="Journal Author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Description</label>
					<div class="col-sm-4">
					<textarea name="j_descr"  class="form-control" placeholder="Journal Description" ><?php echo $row ['j_descr']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					 <label class="col-sm-3 control-label">Impact Factor</label>
					<div class="col-sm-2">
						
						<input type="link" name="j_impact" value="<?php echo $row ['j_impact']; ?>" class="form-control" placeholder="Impact Factor" required>
					</div>
					
				</div>
        
				
				
				


	
			
		<form method="post">
	
		</form>
				
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
				<br>
				<br>
				<br>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<a href="indexjournal.php" class="btn btn-sm btn-primary">Save</a>
						<!--<input type="submit" name="save" class="btn btn-sm btn-primary" value="Save">-->
						<a href="indexjournal.php" class="btn btn-sm btn-danger">Cancel</a>
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