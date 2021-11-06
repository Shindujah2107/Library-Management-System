<?php

 include "server.php"; 
 include "navbarregis.php"; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration    </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">

input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}








    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>
	<div class="header">
		<h2> Library Management System</h2>
		<h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); 

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "First name is required";
  } else {
    $name = test_input($_POST["fname"]);
  }
  
if (empty($_POST["lname"])) {
    $nameErr = "Last name is required";
  } else {
    $name = test_input($_POST["lname"]);
  }

if (empty($_POST["username"])) {
    $nameErr = "User name is required";
  } else {
    $name = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
if (empty($_POST["uid"])) {
    $nameErr = "ID is required";
  } else {
    $name = test_input($_POST["uid"]);
  }

  if (empty($_POST["contact"])) {
    $emailErr = "Contact is required";
  } else {
    $email = test_input($_POST["contact"]);
  }
  



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<div class="input-group">
			




			<label>First Name</label>
			<input type="text" name="fname" size='5' onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
	 style="width: 350px;">
		</div>

<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lname" size='20' onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
	  style="width: 350px;">
		</div>


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" size='20' onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" 
	 style="width: 350px;" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"  size='20' style="width: 350px; " value="<?php echo $email; ?>">
		</div>
		<div class="input-group" >
			<label>Password</label>
			<input type="password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required style="width: 350px;">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" size='20' style="width: 350px;">
		</div>
		



		<div class="input-group">
			<label>University Id</label>
			<input type="text" name="uid"  pattern="(?=.*[UWU///]).{14,}" title="UWU/___/__/___ must contain this format" style="width: 350px;">
		</div>

		<div class="input-group">
			<label>Contact Number</label>
			<input type="number" name="contact" size='20' style="width: 350px;">
		</div>


		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" style="width: 350px;">Register</button>
		</div>
		<p>
			Already a member? <a href="login1.php">Sign in</a>
		</p>
	</form>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
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
</script>




	
	<?php
include "footer.php";

	?>
</body>
</html>