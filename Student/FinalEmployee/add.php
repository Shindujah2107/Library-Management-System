
<!DOCTYPE html>
<html lang="en">
<head>
<!--

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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Employee Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Employee Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Employee Details</a></li>
					<li class="active"><a href="add.php">Add Employee</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Employee Details &raquo; Add Employee</h2>
			<hr />

			<?php
			$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "library2";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
			if(isset($_POST['add'])){
		
				$ename		     = $_POST['ename'];
				$address1	 = $_POST['address1'];
                                $address2	 = $_POST['address2'];
                                $phone		 = $_POST['phone'];
                                $post		 = $_POST['post'];
				$jdate	         = $_POST['jdate'];
				 $quali		 = $_POST['quali'];
				 $exp		 = $_POST['exp'];
				
			
				$username = $_POST['username'];
				$pass1	         = $_POST['pass1'];
				$pass2           = $_POST['pass2'];

				
			
					if($pass1 == $pass2){
						$password = md5($pass1);
						$insert = "INSERT INTO employee(eid, ename, address1, address2, phone, post, jdate, quali,exp, username, password)VALUES('$eid','$ename', '$address1', '$address2', '$phone', '$post', '$jdate', '$quali','$exp', '$username', '$password')";
						mysqli_query($connection, $insert);
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully added employee details.</div>';
						}else {
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Employee data failrd to save..!</div>';
						}
					} else {
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password doesnot same!</div>';
					}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Allready added..!</div>';
				}
			
			?>

			<form class="form-horizontal" action="add.php" method="post">
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">EID</label>
					<div class="col-sm-2">
						<input type="text" name="eid" class="form-control" placeholder="EID" required>
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3 control-label">Employee Name</label>
					<div class="col-sm-4">
						<input type="text" name="ename" class="form-control" placeholder="Employee Name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Permanent Address</label>
					<div class="col-sm-3">
						<textarea name="address1" class="form-control" placeholder="Permanent Address"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Current Address</label>
					<div class="col-sm-3">
						<textarea name="address2" class="form-control" placeholder="Current Address"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Phone Number</label>
					<div class="col-sm-3">
						<input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Position</label>
					<div class="col-sm-2">
						<select name="post" class="form-control" required>
							<option value=""> ----- </option>
							<option value="Admin">Admin</option>
							<option value="Librarian">Librarian</option>
                            <option value="Library Assistant">Library Assistant</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Date of join</label>
					<div class="col-sm-4">
						<input type="text" name="jdate" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Qualification</label>
					<div class="col-sm-4">
						<input type="text" name="quali" class="form-control" placeholder="Qualification" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Experience</label>
					<div class="col-sm-4">
						<input type="text" name="exp" class="form-control" placeholder="Experience" required>
					</div>
				</div>
				
				
			
				<div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass1" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Repeat Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass2" class="form-control" placeholder="Repeat Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Save">
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
</html>
