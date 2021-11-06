<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}


?>
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
	<title>
	Add employee
	</title>
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
					<li><a href="indexe.php">Employee Details</a></li>
					<li class="active"><a href="add.php">Add Employee</a></li>
					<li><a href="./index.php">Home</a></li>
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
$db_name = "library3";

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
						//$password = md5($pass1);
						$password = ($pass1);
						$insert = "INSERT INTO employee( ename, address1, address2, phone, post, jdate, quali,exp, username, password)VALUES('$ename', '$address1', '$address2', '$phone', '$post', '$jdate', '$quali','$exp', '$username', '$password')";
						$query1 = "INSERT INTO login (username, password,type) VALUES('$username', '$password','$post')";
					  	mysqli_query($connection, $insert);
						mysqli_query($connection, $query1);


						
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully added employee details.</div>';
						}else {
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Employee data failrd to save..!</div>';
						}
					} else {
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password doesnot same!</div>';
					}
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
				<?php

  $error = '';
  if(array_key_exists('phone', $_POST))
  {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    {
      $error = 'Invalid Number!';
    }
  }

?>
				<div class="form-group">
					<label class="col-sm-3 control-label">Phone Number</label>
					<div class="col-sm-3">
						<input type="text" name="phone" class="form-control" placeholder="Phone Number" id="uNIC"  required>
						
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Position</label>
					<div class="col-sm-2">
						<select name="post" class="form-control" required>
							<option value=""> ----- </option>
							
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
						<input type="password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="form-control" placeholder="Password">
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
						<a href="indexe.php" class="btn btn-sm btn-danger">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>


				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
function validating($phone){
$valid_number = filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
echo $valid_number."<br>";
}
</script>

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
