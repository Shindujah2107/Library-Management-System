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
					<li><a href="indexe.php">Employee Details</a></li>
					<li><a href="add.php">Add Data</a></li>
					<li><a href="./index.php">Home</a></li>
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
					<label class="col-sm-3 control-label">Employee Name</label>
					<div class="col-sm-4">
						<input type="text" name="ename" value="<?php echo $row ['ename']; ?>" class="form-control" placeholder="Employee Name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Permanent Address</label>
					<div class="col-sm-3">
						<textarea name="address1" class="form-control" placeholder="Permanent Address"><?php echo $row ['address1']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Current Address</label>
					<div class="col-sm-3">
						<textarea name="address2" class="form-control" placeholder="Current Address"><?php echo $row ['address2']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Phone Number</label>
					<div class="col-sm-3">
						<input type="text" name="phone" value="<?php echo $row ['phone']; ?>" class="form-control" placeholder="Phone Number" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Position</label>
					<div class="col-sm-2">
						<select name="post" class="form-control" required>
							<option value="<?php echo $row ['post']; ?>"> - Position- </option>
							<option value="Admin">Admin</option>
							<option value="Librarian">Librarian</option>
                            <option value="Library Assistant">Library Assistant</option>
							
						</select>
					</div>
                    <div class="col-sm-3">
                    <b>Position :</b> <span class="label label-success"><?php echo $row['post']; ?></span>
				    </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Joining Date</label>
					<div class="col-sm-4">
						<input type="text" name="jdate" value="<?php echo $row ['jdate']; ?>" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Qualification</label>
					<div class="col-sm-4">
						<input type="text" name="quali" value="<?php echo $row ['quali']; ?>" class="form-control" placeholder="Qualification" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Experience</label>
					<div class="col-sm-4">
						<input type="text" name="exp" value="<?php echo $row ['exp']; ?>" class="form-control" placeholder="Experience" required>
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
						<a href="indexe.php" class="btn btn-sm btn-danger">Cancel</a>
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