<?php
			session_start();

	// variable declaration
	$eid = "";
	$ename    = "";
	$address1    = "";
	$address2    = "";
	$phone    = "";
	$post    = "";
	$jdate = "";
	$quali    = ""; 
	$exp    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'library3');




			if(isset($_POST['add'])){
				$eid		     = mysqli_real_escape_string($db,$_POST['eid']);
				$ename		     = mysqli_real_escape_string($db,$_POST['ename']);
				$address1	     = mysqli_real_escape_string($db,$_POST['address1']);
				$address2		     =mysqli_real_escape_string($db, $_POST['address2']);
				$phone		 = mysqli_real_escape_string($db,$_POST['phone']);
				$post		 = mysqli_real_escape_string($db,$_POST['post']);
				$jdate	       =  mysqli_real_escape_string    ($db, $_POST['jdate']);
				$quali		     =mysqli_real_escape_string ($db,$_POST['quali']);
				$exp		     = mysqli_real_escape_string($db,$_POST['exp']);
				$username		 = mysqli_real_escape_string($db,$_POST['username']);
				$pass1	         = mysqli_real_escape_string($db,$_POST['pass1']);
				$pass2           = mysqli_real_escape_string($db,$_POST['pass2']);

				if (empty($eid)) { array_push($errors, "EmployeeId is required"); }
				if (empty($ename)) { array_push($errors, "Employee name is required"); }
				if (empty($address1)) { array_push($errors, "Permanent address is required"); }
				if (empty($address2)) { array_push($errors, "Current address is required"); }
				if (empty($phone)) { array_push($errors, "Phone number is required"); }
				if (empty($post)) { array_push($errors, "Position is required"); }
				if (empty($jdate)) { array_push($errors, "Date is required"); }
				if (empty($quali)) { array_push($errors, "Qualification is required"); }
				if (empty($exp)) { array_push($errors, "Experience is required"); }
				if (empty($username)) { array_push($errors, "Username is required"); }
				if (empty($pass1)) { array_push($errors, "Password is required"); }
				if ($pass1 != $pass2) {
			array_push($errors, "The two passwords do not match");
		}
				if (count($errors) == 0)


				{
						$password = md5($pass1);
	$query = "INSERT INTO employee (eid,ename,address1,addrsess2,phone,post,jdate, quali,exp, username, password)
			VALUES('$eid','$ename', '$address1', '$address2', '$phone', '$post', '$jdate', '$quali','$exp', '$username', '$password')";

							mysqli_query($db, $query);
							$_SESSION['eid'] = $eid;
			                $_SESSION['success'] = "Added successfully";
			                header('location: indexe.php');
			            }
			        }
								
				
			?>