<?php 
include "server.php";
include "navbar.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username"  style="width: 350px;">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" style="width: 350px;">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a> &nbsp&nbsp&nbsp
		
			Forget Password? <a href="update_password.php">Change Password</a><br>
		</p>
	</form>
	<br><br><br><br><br><br><br><br>
<?php
include "footer.php";
?>

</body>
</html>