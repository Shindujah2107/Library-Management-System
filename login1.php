<?php 
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
	
	<form action="./loginb.php" method="POST" >

	<!--	<?php //include('errors.php'); ?>

		<div class="input-group">
              <label for="category">User Role&nbsp&nbsp&nbsp </label> 
                <select name="category" style="width:350px;">
                    <option value="Student" > Student</option>
                    <option value="Academic Staff"> Academic Staff</option>
                    <option value="Admin">Admin</option>
                    <option value="Assistant">Assistant</option> 
                </select>
     </div></div>
-->
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" size='20' style="width: 350px;">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" size='20'style="width: 350px;">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"  name="submit" id="submit">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a> &nbsp&nbsp&nbsp
		
			Forget Password? <a href="change-password.php">Change Password</a><br>
		</p>
	</form>
	<br><br><br><br><br><br><br><br>
<?php
include "footer.php";
?>

</body>
</html>