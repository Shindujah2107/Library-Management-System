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
	<title>Employee</title>

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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="http://www.hakkoblogs.com">Employee Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="http://www.hakkoblogs.com">Employee Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Master Data</a></li>
					<li><a href="add.php">Add Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Employee Details &raquo; Edit Data</h2>
			<hr />
			
			<?php
			$eid = $_GET['eid'];
			$sql = mysqli_query($connection, "SELECT * FROM employee WHERE eid='$eid'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
		
				$ename		     = $_POST['ename'];
				$address1	 = $_POST['address1'];
				$address2	 = $_POST['address2'];
				$phone		     = $_POST['phone'];
				$post		 = $_POST['post'];
				$jdate		 = $_POST['jdate'];
				$quali			 = $_POST['quali'];
				$exp			 = $_POST['exp'];
				
				$update = mysqli_query($connection, "UPDATE employee SET ename='$ename', address1='$address1', address2='$address2', phone='$phone', post='$post', jdate='$jdate', quali='$quali',exp='$exp' WHERE eid='$eid'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?eid=".$eid."&pesan=sukses");
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
					<label class="col-sm-3 control-label">Book ISBN</label>
					<div class="col-sm-4">
						<input type="text" name="book_isbn" value="<?php echo $row ['ename']; ?>" class="form-control" placeholder="Book ISBN" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Title</label>
					<div class="col-sm-4">
						<input type="text" name="book_title" value="<?php echo $row ['book_title']; ?>" class="form-control" placeholder="Book Title" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Author</label>
					<div class="col-sm-4">
						<input type="text" name="book_author" value="<?php echo $row ['book_author']; ?>" class="form-control" placeholder="Book Author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Image</label>
					<div class="col-sm-4">
						<input type="text" name="book_image" value="<?php echo $row ['book_image']; ?>" class="form-control" placeholder="Book Image" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Description</label>
					<div class="col-sm-3">
						<textarea name="book_deescr" class="form-control" placeholder="Book Description"><?php echo $row ['book_deescr']; ?></textarea>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Publisher Id</label>
					<div class="col-sm-2">
						<select name="post" class="form-control" required>
							<option value=""> - Publisher_ Id- </option>
							<option value="1">1</option>
							<option value="2">1</option>
							<option value="3">1</option>
							<option value="4">1</option>
							<option value="5">1</option>
							<option value="6">1</option>
							
							
						</select>
					</div>
                    <div class="col-sm-3">
                    <b>Publisher Id :</b> <span class="label label-success"><?php echo $row['publisher_id']; ?></span>
				    </div>
				</div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">PDF</label>
					<div class="col-sm-4">
						<input type="text" name="pdf" value="<?php echo $row ['pdf']; ?>" class="form-control" placeholder="PDF" required>
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
						<a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
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